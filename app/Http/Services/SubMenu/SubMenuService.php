<?php

namespace App\Http\Services\SubMenu;

use App\Models\SubMenu;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubMenuService
{
    function getAllSubMenuList()
    {
        $subMenus = SubMenu::all();

        return $subMenus;
    }

    function getAllSubMenu()
    {
        $subMenus = SubMenu::where('active', 1)->orderBy('sort_by', 'asc')->get();

        return $subMenus;
    }

    public function save($request)
    {
        try {
            $subMenu_name = $request->input('name');
            $url = $request->input('url');
            $sort_by = $request->input('sort_by');
            $icon_code = $request->input('icon_code');
            $active = $request->input('active');

            if (!$active) {
                $active = 0;
            }

            $icon_code = null;
            if ($request->hasfile('icon_code')) {
                $file = $request->file('icon_code');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/subMenus'), $name);

                $icon_code = 'subMenus/' . $name;
            }

            $subMenu = SubMenu::create([
                'name' => $subMenu_name,
                'url' => $url,
                'sort_by' => $sort_by,
                'icon_code' => $icon_code,
                'active' => $active,
                'created_date' => Carbon::now(),
            ]);

            Session::flash('success', 'Tạo mới menu phụ thành công');
            return $subMenu;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới menu phụ thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $subMenu)
    {
        try {
            $subMenu_name = $request->input('name');
            $url = $request->input('url');
            $sort_by = $request->input('sort_by');
            $icon_code = $request->input('icon_code');
            $active = $request->input('active');

            if (!$active) {
                $active = 0;
            }

            if ($request->hasfile('icon_code') || $icon_code != $subMenu->icon_code) {
                $file = $request->file('icon_code');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                if ($name != $subMenu->icon_code) {
                    $file->move(public_path('storage/uploads/subMenus'), $name);

                    $icon_code = 'subMenus/' . $name;
                } else {
                    $icon_code = $subMenu->icon_code;
                }
            }

            $subMenu->name = $subMenu_name;
            $subMenu->url = $url;
            $subMenu->sort_by = $sort_by;
            $subMenu->icon_code = $icon_code;
            $subMenu->active = $active;
            $subMenu->save();

            Session::flash('success', 'Cập nhật menu phụ thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật menu phụ thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($subMenu_id)
    {
        try {
            $subMenu = SubMenu::find($subMenu_id);
            Storage::delete("public/uploads/" . $subMenu->icon_code);

            SubMenu::where('id', $subMenu_id)->delete();

            Session::flash('success', 'Xóa bài menu phụ thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài menu phụ thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}