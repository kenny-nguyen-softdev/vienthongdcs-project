<?php

namespace App\Http\Services\Origin;

use App\Models\Origin;
use App\Models\ParentCategoryOrigin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OriginService
{
    function getAllOrigins()
    {
        $origins = Origin::all();

        return $origins;
    }

    function getOriginBySlug($slug)
    {
        $origin = Origin::where('slug', $slug)->first();

        return $origin;
    }

    function getOriginById($id)
    {
        $origin = Origin::find($id);

        return $origin;
    }

    function checkExistOriginOfParentCategory($parent_category_id, $origin_id)
    {
        $result = ParentCategoryOrigin::where(['parent_category_id' => $parent_category_id, 'origin_id' => $origin_id])->first();

        return $result;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');

            $origin = Origin::create([
                'name' => $name,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới xuất xứ thành công');
            return $origin;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới xuất xứ thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $origin)
    {
        try {
            $name = $request->input('name');

            $origin->name = $name;
            $origin->save();

            Session::flash('success', 'Cập nhật xuất xứ thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật xuất xứ thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($origin_id)
    {
        try {
            Origin::where('id', $origin_id)->delete();

            Session::flash('success', 'Xóa xuất xứ thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa xuất xứ thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}