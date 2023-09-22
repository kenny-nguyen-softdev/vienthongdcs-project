<?php

namespace App\Http\Services\Component;

use App\Models\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComponentService
{
    public function getAllComponents() {
        $components = Component::all();

        return $components;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $mainIngredient = $request->input('mainIngredient');

            $component = Component::create([
                'name' => $name,
                'main_ingredient_id' => $mainIngredient,
                'created_date' => Carbon::now(),
            ]);

            Session::flash('success', 'Tạo mới minh bạch nguyên liệu thành công');

            return $component;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới minh bạch nguyên liệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $component)
    {
        try {
            $name = $request->input('name');
            $mainIngredient = $request->input('mainIngredient');

            $component->name = $name;
            $component->main_ingredient_id = $mainIngredient;
            $component->save();

            Session::flash('success', 'Cập nhật minh bạch nguyên liệu thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật minh bạch nguyên liệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($component_id)
    {
        try {
            Component::where('id', $component_id)->delete();

            Session::flash('success', 'Xóa bài minh bạch nguyên liệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài minh bạch nguyên liệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}