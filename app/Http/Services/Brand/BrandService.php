<?php

namespace App\Http\Services\Brand;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BrandService
{
    function getAllBrands()
    {
        $brands = Brand::all();

        return $brands;
    }

    function getBrandBySlug($slug)
    {
        $brand = Brand::where('slug', $slug)->first();

        return $brand;
    }

    function getBrandListBySlug($slug)
    {
        $products = Brand::where('slug', $slug)->get();

        return $products;
    }

    function getBrandListsOrderByIdDescHavingLimit($limit)
    {
        $brands = Brand::orderBy('id', 'desc')->limit($limit)->get();

        return $brands;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $represented_image = $request->input('represented_image');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');

            if (empty($is_active)) {
                $is_active = 0;
            }

            $brand = Brand::create([
                'name' => $name,
                'represented_image' => $represented_image,
                'is_active' => $is_active,
                'title_seo' => $title_seo,
                'meta_des' => $meta_des,
                'meta_key' => $meta_key,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới thương hiệu thành công');
            return $brand;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới thương hiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $brand)
    {
        try {
            $name = $request->input('name');
            $represented_image = $request->input('represented_image');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');

            if (empty($is_active)) {
                $is_active = 0;
            }

            $brand->name = $name;
            $brand->represented_image = $represented_image;
            $brand->title_seo = $title_seo;
            $brand->meta_des = $meta_des;
            $brand->meta_key = $meta_key;
            $brand->is_active = $is_active;
            $brand->save();

            Session::flash('success', 'Cập nhật thương hiệu thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thương hiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($brand_id)
    {
        try {
            $brand = Brand::find($brand_id);
            if (count($brand->products) > 0) {
                Session::flash('error', 'Thương hiệu đã có sản phẩm. Vui lòng xóa sản phẩm trước !');
                return false;
            }

            Brand::where('id', $brand_id)->delete();

            Session::flash('success', 'Xóa thương hiệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa thương hiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}