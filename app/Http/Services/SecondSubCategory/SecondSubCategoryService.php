<?php

namespace App\Http\Services\SecondSubCategory;

use App\Models\SecondSubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SecondSubCategoryService
{
    function getAllSubCategories()
    {
        $secondSubCategories = SecondSubCategory::all();

        return $secondSubCategories;
    }

    function getSecondSubCategoryBySlug($slug)
    {
        $secondSubCategory = SecondSubCategory::where('slug', $slug)->first();

        return $secondSubCategory;
    }

    function getSecondSubCategoryListBySlug($slug)
    {
        $subCategories = SecondSubCategory::where('slug', $slug)->get();

        return $subCategories;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $secondSubCategory = $request->input('secondSubCategory');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            if (empty($is_active)) {
                $is_active = 0;
            }

            // $secondSubCategoryList = $this->getSecondSubCategoryListBySlug($slug);
            // if (count($secondSubCategoryList) > 0) {
            //     $count = 1;
            //     foreach ($secondSubCategoryList as $secondSubCategory) {
            //         $count++;
            //     }
            //     $slugString = $name . '-' . $count;
            //     $slug = Str::slug($slugString, '-');
            // }

            $secondSubCategory = SecondSubCategory::create([
                'name' => $name,
                'first_sub_category_id' => $secondSubCategory,
                'is_active' => $is_active,
                'slug' => $slug,
                'title_seo' => $title_seo,
                'meta_des' => $meta_des,
                'meta_key' => $meta_key,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới danh mục phụ 2 thành công');
            return $secondSubCategory;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới danh mục phụ 2 thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $secondSubCategory)
    {
        try {
            $name = $request->input('name');
            $firstSubCategory = $request->input('firstSubCategory');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            if (empty($is_active)) {
                $is_active = 0;
            }

            // $secondSubCategoryList = $this->getSecondSubCategoryListBySlug($slug);
            // if (count($secondSubCategoryList) > 0) {
            //     $count = 1;
            //     foreach ($secondSubCategoryList as $secondSubCategory) {
            //         $count++;
            //     }
            //     $slugString = $name . '-' . $count;
            //     $slug = Str::slug($slugString, '-');
            // }

            $secondSubCategory->name = $name;
            $secondSubCategory->first_sub_category_id = $firstSubCategory;
            $secondSubCategory->is_active = $is_active;
            $secondSubCategory->title_seo = $title_seo;
            $secondSubCategory->meta_des = $meta_des;
            $secondSubCategory->meta_key = $meta_key;
            $secondSubCategory->slug = $slug;
            $secondSubCategory->save();

            Session::flash('success', 'Cập nhật danh mục phụ 2 thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật danh mục phụ 2 thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function updateDescription($request, $secondSubCategory)
    {
        try {
            $description = $request->input('description');

            $secondSubCategory->description = $description;
            $secondSubCategory->save();

            Session::flash('success', 'Cập nhật mô tả danh mục phụ 2 thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật mô tả danh mục phụ 2 thất bại. Vui lòng thử lại !');
            return false;
        }
    }


    function deleteById($secondSubCategory_id)
    {
        try {
            $secondSubCategory = SecondSubCategory::find($secondSubCategory_id);
            if (count($secondSubCategory->products) > 0) {
                Session::flash('error', 'Danh mục phụ 2 đã có sản phẩm. Vui lòng xóa sản phẩm trước !');
                return false;
            }

            SecondSubCategory::where('id', $secondSubCategory_id)->delete();

            Session::flash('success', 'Xóa danh mục phụ 2 thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa danh mục phụ 2 thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}