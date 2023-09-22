<?php

namespace App\Http\Services\Banner;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BannerService
{
    function getAllBanners()
    {
        $banners = Banner::all();

        return $banners;
    }

    function getAllBannerOrderBySortByAsc()
    {
        $banners = Banner::orderBy('sort_by', 'asc')->get();

        return $banners;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $thumb = $request->input('thumb');
            $url = $request->input('url');
            $sort_by = $request->input('sort_by');
            $active = $request->input('active');
            $title = $request->input('title');
            $sub_title = $request->input('sub_title');
            $description = $request->input('description');
            $button_name = $request->input('button_name');

            if (!$active) {
                $active = 0;
            }

            $slider = Banner::create([
                'name' => $name,
                'thumb' => $thumb,
                'url' => $url,
                'sort_by' => $sort_by,
                'active' => $active,
                'title' => $title,
                'sub_title' => $sub_title,
                'description' => $description,
                'button_name' => $button_name,
            ]);

            Session::flash('success', 'Tạo mới slider thành công');
            return $slider;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới slider thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $slider)
    {
        try {
            $name = $request->input('name');
            $thumb = $request->input('thumb');
            $url = $request->input('url');
            $sort_by = $request->input('sort_by');
            $active = $request->input('active');
            $title = $request->input('title');
            $sub_title = $request->input('sub_title');
            $description = $request->input('description');
            $button_name = $request->input('button_name');

            if (!$active) {
                $active = 0;
            }

            $slider->name = $name;
            $slider->thumb = $thumb;
            $slider->url = $url;
            $slider->sort_by = $sort_by;
            $slider->active = $active;
            $slider->title = $title;
            $slider->sub_title = $sub_title;
            $slider->description = $description;
            $slider->button_name = $button_name;
            $slider->save();

            Session::flash('success', 'Cập nhật slider thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật slider thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($slider_id)
    {
        try {
            $slider = Banner::find($slider_id);
            Storage::delete("public/uploads/" . $slider->thumb);

            Banner::where('id', $slider_id)->delete();

            Session::flash('success', 'Xóa slider thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa slider thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}