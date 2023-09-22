<?php

namespace App\Http\Services\Feature;

use App\Models\Feature;
use App\Models\ParentCategoryFeature;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class FeatureService
{
    function getAllFeatures()
    {
        $features = Feature::all();

        return $features;
    }

    function getFeatureBySlug($slug)
    {
        $feature = Feature::where('slug', $slug)->first();

        return $feature;
    }

    function getFeatureById($id)
    {
        $feature = Feature::find($id);

        return $feature;
    }

    function checkExistFeatureOfParentCategory($parent_category_id, $feature_id)
    {
        $result = ParentCategoryFeature::where(['parent_category_id' => $parent_category_id, 'feature_id' => $feature_id])->first();

        return $result;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');

            $feature = Feature::create([
                'name' => $name,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới tính năng thành công');
            return $feature;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới tính năng thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $feature)
    {
        try {
            $name = $request->input('name');

            $feature->name = $name;
            $feature->save();

            Session::flash('success', 'Cập nhật tính năng thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật tính năng thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($feature_id)
    {
        try {
            Feature::where('id', $feature_id)->delete();

            Session::flash('success', 'Xóa tính năng thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa tính năng thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}