<?php

namespace App\Http\Services\MainIngredient;

use App\Models\MainIngredient;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MainIngredientService
{
    // protected $item_per_page;

    function getAllMainIngredientList()
    {
        $mainIngredients = MainIngredient::all();

        return $mainIngredients;
    }

    function getAllMainIngredients()
    {
        $mainIngredients = MainIngredient::where('active', 1)->orderBy('sort_by', 'asc')->get();

        return $mainIngredients;
    }

    function getMainIngredientListOrderBySortBy()
    {
        $mainIngredients = MainIngredient::where('active', 1)->orderBy('sort_by', 'asc')->get();

        return $mainIngredients;
    }

    public function save($request)
    {
        try {
            $mainIngredient_name = $request->input('name');
            $description = $request->input('description');
            $color = $request->input('color');
            $sort_by = $request->input('sort_by');
            $active = $request->input('active');

            if (!$active) {
                $active = 0;
            }

            $featured_image = null;
            if ($request->hasfile('featured_image')) {
                $file = $request->file('featured_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/ingredients'), $name);

                $featured_image = 'ingredients/' . $name;
            }

            $mainIngredient = MainIngredient::create([
                'name' => $mainIngredient_name,
                'featured_image' => $featured_image,
                'description' => $description,
                'color' => $color,
                'sort_by' => $sort_by,
                'active' => $active,
                'created_date' => Carbon::now(),
            ]);

            Session::flash('success', 'Tạo mới minh bạch nguyên liệu thành công');
            return $mainIngredient;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới minh bạch nguyên liệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $mainIngredient)
    {
        try {
            $mainIngredient_name = $request->input('name');
            $featured_image = $request->input('featured_image');
            $description = $request->input('description');
            $color = $request->input('color');
            $sort_by = $request->input('sort_by');
            $active = $request->input('active');

            if (!$active) {
                $active = 0;
            }

            if ($request->hasfile('featured_image') || $featured_image != $mainIngredient->featured_image) {
                $file = $request->file('featured_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                if ($name != $mainIngredient->featured_image) {
                    $file->move(public_path('storage/uploads/ingredients'), $name);

                    $featured_image = 'ingredients/' . $name;
                } else {
                    $featured_image = $mainIngredient->featured_image;
                }
            }

            $mainIngredient->name = $mainIngredient_name;
            $mainIngredient->featured_image = $featured_image;
            $mainIngredient->color = $color;
            $mainIngredient->description = $description;
            $mainIngredient->sort_by = $sort_by;
            $mainIngredient->active = $active;
            $mainIngredient->save();

            Session::flash('success', 'Cập nhật minh bạch nguyên liệu thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật minh bạch nguyên liệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($mainIngredient_id)
    {
        try {
            $mainIngredient = MainIngredient::find($mainIngredient_id);
            Storage::delete("public/uploads/" . $mainIngredient->featured_image);

            MainIngredient::where('id', $mainIngredient_id)->delete();

            Session::flash('success', 'Xóa bài minh bạch nguyên liệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài minh bạch nguyên liệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}