<?php

namespace App\Http\Services\Configuration;

use App\Models\Configuration;
use App\Models\ParentCategoryConfiguration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ConfigurationService
{
    function getAllConfigurations()
    {
        $configurations = Configuration::all();

        return $configurations;
    }

    function getConfigurationBySlug($slug)
    {
        $configuration = Configuration::where('slug', $slug)->first();

        return $configuration;
    }

    function getConfigurationById($id)
    {
        $configuration = Configuration::find($id);

        return $configuration;
    }

    function checkExistConfigurationOfParentCategory($parent_category_id, $configuration_id)
    {
        $result = ParentCategoryConfiguration::where(['parent_category_id' => $parent_category_id, 'configuration_id' => $configuration_id])->first();

        return $result;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');

            $configuration = Configuration::create([
                'name' => $name,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới cấu hình thành công');
            return $configuration;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới cấu hình thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $configuration)
    {
        try {
            $name = $request->input('name');

            $configuration->name = $name;
            $configuration->save();

            Session::flash('success', 'Cập nhật cấu hình thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật cấu hình thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($configuration_id)
    {
        try {
            Configuration::where('id', $configuration_id)->delete();

            Session::flash('success', 'Xóa cấu hình thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa cấu hình thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}