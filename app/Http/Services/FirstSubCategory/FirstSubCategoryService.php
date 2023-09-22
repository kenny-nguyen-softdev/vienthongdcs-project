<?php

namespace App\Http\Services\FirstSubCategory;

use App\Models\FirstSubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FirstSubCategoryService
{
    function getAllSubCategories()
    {
        $firstSubCategories = FirstSubCategory::all();

        return $firstSubCategories;
    }

    function getFirstSubCategoryBySlug($slug)
    {
        $firstSubCategory = FirstSubCategory::where('slug', $slug)->first();

        return $firstSubCategory;
    }

    function getFirstSubCategoryListBySlug($slug)
    {
        $subCategories = FirstSubCategory::where('slug', $slug)->get();

        return $subCategories;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $parentCategory = $request->input('parentCategory');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');

            if (empty($is_active)) {
                $is_active = 0;
            }

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            // $firstSubCategoryList = $this->getFirstSubCategoryListBySlug($slug);
            // if (count($firstSubCategoryList) > 0) {
            //     $count = 1;
            //     foreach ($firstSubCategoryList as $firstSubCategory) {
            //         $count++;
            //     }
            //     $slugString = $name . '-' . $count;
            //     $slug = Str::slug($slugString, '-');
            // }

            $firstSubCategory = FirstSubCategory::create([
                'name' => $name,
                'parent_category_id' => $parentCategory,
                'is_active' => $is_active,
                'slug' => $slug,
                'title_seo' => $title_seo,
                'meta_des' => $meta_des,
                'meta_key' => $meta_key,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới danh mục phụ 1 thành công');
            return $firstSubCategory;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới danh mục phụ 1 thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $firstSubCategory)
    {
        try {
            $name = $request->input('name');
            $parentCategory = $request->input('parentCategory');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');

            if (empty($is_active)) {
                $is_active = 0;
            }

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            // $firstSubCategoryList = $this->getFirstSubCategoryListBySlug($slug);
            // if (count($firstSubCategoryList) > 0) {
            //     $count = 1;
            //     foreach ($firstSubCategoryList as $firstSubCategory) {
            //         $count++;
            //     }
            //     $slugString = $name . '-' . $count;
            //     $slug = Str::slug($slugString, '-');
            // }

            $firstSubCategory->name = $name;
            $firstSubCategory->parent_category_id = $parentCategory;
            $firstSubCategory->is_active = $is_active;
            $firstSubCategory->title_seo = $title_seo;
            $firstSubCategory->meta_des = $meta_des;
            $firstSubCategory->meta_key = $meta_key;
            $firstSubCategory->slug = $slug;
            $firstSubCategory->save();

            Session::flash('success', 'Cập nhật danh mục phụ 1 thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật danh mục phụ 1 thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($firstSubCategory_id)
    {
        try {
            $firstSubCategory = FirstSubCategory::find($firstSubCategory_id);
            if (count($firstSubCategory->secondSubCategories) > 0) {
                Session::flash('error', 'Danh mục phụ 1 đã có danh mục phụ 2. Vui lòng xóa danh mục phụ 2 trước !');
                return false;
            }

            FirstSubCategory::where('id', $firstSubCategory_id)->delete();

            Session::flash('success', 'Xóa danh mục phụ 1 thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa danh mục phụ 1 thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}