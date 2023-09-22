<?php

namespace App\Http\Services\ParentCategorySlider;

use App\Models\ParentCategorySlider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ParentCategorySliderService
{
    function getAllParentCategorySliders()
    {
        $parentCategorySliders = ParentCategorySlider::all();

        return $parentCategorySliders;
    }

    function getAllParentCategorySliderOrderBySortByAsc()
    {
        $parentCategorySliders = ParentCategorySlider::orderBy('sort_by', 'asc')->get();

        return $parentCategorySliders;
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
            // $sub_title = $request->input('sub_title');
            $description = $request->input('description');
            $button_name = $request->input('button_name');
            $parent_category_id = $request->input('parentCategory');

            if (!$active) {
                $active = 0;
            }

            $parentCategorySlider = ParentCategorySlider::create([
                'name' => $name,
                'thumb' => $thumb,
                'url' => $url,
                'sort_by' => $sort_by,
                'active' => $active,
                'title' => $title,
                // 'sub_title' => $sub_title,
                'description' => $description,
                'button_name' => $button_name,
                'parent_category_id' => $parent_category_id,
            ]);

            Session::flash('success', 'Tạo mới slider của danh mục chính thành công');
            return $parentCategorySlider;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới slider của danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $parentCategorySlider)
    {
        try {
            $name = $request->input('name');
            $thumb = $request->input('thumb');
            $url = $request->input('url');
            $sort_by = $request->input('sort_by');
            $active = $request->input('active');
            $title = $request->input('title');
            // $sub_title = $request->input('sub_title');
            $description = $request->input('description');
            $button_name = $request->input('button_name');
            $parent_category_id = $request->input('parentCategory');

            if (!$active) {
                $active = 0;
            }

            $parentCategorySlider->name = $name;
            $parentCategorySlider->thumb = $thumb;
            $parentCategorySlider->url = $url;
            $parentCategorySlider->sort_by = $sort_by;
            $parentCategorySlider->active = $active;
            $parentCategorySlider->title = $title;
            // $parentCategorySlider->sub_title = $sub_title;
            $parentCategorySlider->description = $description;
            $parentCategorySlider->button_name = $button_name;
            $parentCategorySlider->parent_category_id = $parent_category_id;
            $parentCategorySlider->save();

            Session::flash('success', 'Cập nhật slider của danh mục chính thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật slider của danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($parentCategorySlider_id)
    {
        try {
            $parentCategorySlider = ParentCategorySlider::find($parentCategorySlider_id);
            Storage::delete("public/uploads/" . $parentCategorySlider->thumb);

            ParentCategorySlider::where('id', $parentCategorySlider_id)->delete();

            Session::flash('success', 'Xóa slider của danh mục chính thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa slider của danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
