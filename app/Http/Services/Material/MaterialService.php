<?php

namespace App\Http\Services\Material;

use App\Models\Material;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MaterialService
{
    function getAllMaterialList() {
        $materials = Material::all();

        return $materials;
    }

    function getAllMaterials()
    {
        $materials = Material::where('active', 1)->orderBy('sort_by', 'asc')->get();

        return $materials;
    }

    function getMaterialListOrderBySortBy()
    {
        $materials = Material::where('active', 1)->orderBy('sort_by', 'asc')->get();

        return $materials;
    }

    public function save($request)
    {
        try {
            $material_name = $request->input('name');
            $description = $request->input('description');
            $color = $request->input('color');
            $product_id = $request->input('product');

            $featured_image = null;
            if ($request->hasfile('featured_image')) {
                $file = $request->file('featured_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/ingredients'), $name);

                $featured_image = 'ingredients/' . $name;
            }

            $material = Material::create([
                'name' => $material_name,
                'featured_image' => $featured_image,
                'description' => $description,
                'color' => $color,
                'product_id' => $product_id,
                'created_date' => Carbon::now(),
            ]);

            Session::flash('success', 'Tạo mới nguyên liệu của sản phẩm thành công');
            return $material;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới nguyên liệu của sản phẩm thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $material)
    {
        try {
            $material_name = $request->input('name');
            $description = $request->input('description');
            $featured_image = $request->input('featured_image');
            $color = $request->input('color');
            $product_id = $request->input('product');

            if ($request->hasfile('featured_image') || $featured_image != $material->featured_image) {
                $file = $request->file('featured_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                if ($name != $material->featured_image) {
                    $file->move(public_path('storage/uploads/ingredients'), $name);

                    $featured_image = 'ingredients/' . $name;
                } else {
                    $featured_image = $material->featured_image;
                }
            }

            $material->name = $material_name;
            $material->featured_image = $featured_image;
            $material->color = $color;
            $material->description = $description;
            $material->product_id = $product_id;
            $material->save();

            Session::flash('success', 'Cập nhật nguyên liệu của sản phẩm thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật nguyên liệu của sản phẩm thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($material_id)
    {
        try {
            $material = Material::find($material_id);
            Storage::delete("public/uploads/" . $material->featured_image);

            Material::where('id', $material_id)->delete();

            Session::flash('success', 'Xóa bài nguyên liệu của sản phẩm thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài nguyên liệu của sản phẩm thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}