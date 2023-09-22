<?php

namespace App\Http\Services\ParentCategory;

use App\Http\Services\Feature\FeatureService;
use App\Http\Services\Origin\OriginService;
use App\Http\Services\Configuration\ConfigurationService;
use App\Models\ParentCategory;
use App\Models\ParentCategoryFeature;
use App\Models\ParentCategoryOrigin;
use App\Models\ParentCategoryConfiguration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ParentCategoryService
{
    function getAllParentCategories()
    {
        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        $parentCategories = ParentCategory::where($condition)->orderBy('sort_by', 'asc')->get();

        return $parentCategories;
    }

    function getAllParentCategoriesInHomePage()
    {
        $condition = [];
        $condition[] = ['is_active_home', '=', "1"];
        $condition[] = ['is_active', '=', "1"];

        $parentCategories = ParentCategory::where($condition)->orderBy('sort_by', 'asc')->get();

        return $parentCategories;
    }

    function getAllParentCategoriesHavingLimit($limit)
    {
        $parentCategories = ParentCategory::orderBy('sort_by', 'asc')->limit(3)->get();

        return $parentCategories;
    }

    function getParentCategoryBySlug($slug)
    {
        $parentCategory = ParentCategory::where('slug', $slug)->first();

        return $parentCategory;
    }

    function getProductsInParentCategory($parentCategory)
    {
        $products = ParentCategory::join('first_sub_categories', 'parent_categories.id', '=', 'first_sub_categories.parent_category_id')
            ->join('second_sub_categories', 'first_sub_categories.id', '=', 'second_sub_categories.first_sub_category_id')
            ->join('products', 'first_sub_categories.id', '=', 'products.category_id')
            ->select('products.*')
            ->where('parent_categories.id', $parentCategory->id)
            ->orderBy('products.created_date', "desc")
            ->get();

        return $products;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $icon_image = $request->input('icon_image');
            $sort_by = $request->input('sort_by');
            $is_active = $request->input('is_active');
            $is_active_home = $request->input('is_active_home');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');
            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            if (empty($is_active)) {
                $is_active = 0;
            }

            if (empty($is_active_home)) {
                $is_active_home = 0;
            }

            $parentCategory = ParentCategory::create([
                'name' => $name,
                'icon_image' => $icon_image,
                'slug' => $slug,
                'sort_by' => $sort_by,
                'is_active' => $is_active,
                'is_active_home' => $is_active_home,
                'title_seo' => $title_seo,
                'meta_des' => $meta_des,
                'meta_key' => $meta_key,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            $origin_ids = $request->input('origin_ids');

            $originService = new OriginService();
            if (!empty($origin_ids)) {
                foreach ($origin_ids as $originId) {
                    $origin = $originService->checkExistOriginOfParentCategory($parentCategory->id, $originId);

                    if (!empty($origin)) {
                        continue;
                    }

                    $origin = ParentCategoryOrigin::create([
                        'parent_category_id' => $parentCategory->id,
                        'origin_id' => $originId,
                    ]);
                }
            }

            $configuration_ids = $request->input('configuration_ids');

            $configurationService = new ConfigurationService();
            if (!empty($configuration_ids)) {
                foreach ($configuration_ids as $configurationId) {
                    $configuration = $configurationService->checkExistConfigurationOfParentCategory($parentCategory->id, $configurationId);

                    if (!empty($configuration)) {
                        continue;
                    }

                    $configuration = ParentCategoryConfiguration::create([
                        'parent_category_id' => $parentCategory->id,
                        'configuration_id' => $configurationId,
                    ]);
                }
            }

            $feature_ids = $request->input('feature_ids');

            $featureService = new FeatureService();
            if (!empty($feature_ids)) {
                foreach ($feature_ids as $featureId) {
                    $feature = $featureService->checkExistFeatureOfParentCategory($parentCategory->id, $featureId);

                    if (!empty($feature)) {
                        continue;
                    }

                    $feature = ParentCategoryFeature::create([
                        'parent_category_id' => $parentCategory->id,
                        'feature_id' => $featureId,
                    ]);
                }
            }

            Session::flash('success', 'Tạo mới danh mục chính thành công');
            return $parentCategory;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $parentCategory)
    {
        try {
            $parentCategory_id = $parentCategory->id;
            $name = $request->input('name');
            $icon_image = $request->input('icon_image');
            $sort_by = $request->input('sort_by');
            $is_active_home = $request->input('is_active_home');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');
            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            if (empty($is_active)) {
                $is_active = 0;
            }

            if (empty($is_active_home)) {
                $is_active_home = 0;
            }

            $parentCategory->name = $name;
            $parentCategory->icon_image = $icon_image;
            $parentCategory->sort_by = $sort_by;
            $parentCategory->is_active = $is_active;
            $parentCategory->is_active_home = $is_active_home;
            $parentCategory->title_seo = $title_seo;
            $parentCategory->meta_des = $meta_des;
            $parentCategory->meta_key = $meta_key;
            $parentCategory->slug = $slug;
            $parentCategory->save();

            $origin_ids = $request->input('origin_ids');
            $configuration_ids = $request->input('configuration_ids');
            $feature_ids = $request->input('feature_ids');

            foreach ($parentCategory->origins as $origin) {
                if (empty($origin_ids) || (!in_array($origin->id, $origin_ids))) {
                    ParentCategoryOrigin::where('origin_id', $origin->id)
                        ->where('parent_category_id', $parentCategory_id)
                        ->delete();
                }
            }

            foreach ($parentCategory->configurations as $configuration) {
                if (empty($configuration_ids) || (!in_array($configuration->id, $configuration_ids))) {
                    ParentCategoryConfiguration::where('configuration_id', $configuration->id)
                        ->where('parent_category_id', $parentCategory_id)
                        ->delete();
                }
            }

            foreach ($parentCategory->features as $feature) {
                if (empty($feature_ids) || (!in_array($feature->id, $feature_ids))) {
                    ParentCategoryFeature::where('feature_id', $feature->id)
                        ->where('parent_category_id', $parentCategory_id)
                        ->delete();
                }
            }

            $originService = new OriginService();
            if (!empty($origin_ids)) {
                foreach ($origin_ids as $originId) {
                    $origin = $originService->checkExistOriginOfParentCategory($parentCategory->id, $originId);

                    if (!empty($origin)) {
                        continue;
                    }

                    $origin = ParentCategoryOrigin::create([
                        'parent_category_id' => $parentCategory->id,
                        'origin_id' => $originId,
                    ]);
                }
            }

            $configurationService = new ConfigurationService();
            if (!empty($configuration_ids)) {
                foreach ($configuration_ids as $configurationId) {
                    $configuration = $configurationService->checkExistConfigurationOfParentCategory($parentCategory->id, $configurationId);

                    if (!empty($configuration)) {
                        continue;
                    }

                    $configuration = ParentCategoryConfiguration::create([
                        'parent_category_id' => $parentCategory->id,
                        'configuration_id' => $configurationId,
                    ]);
                }
            }

            $featureService = new FeatureService();
            if (!empty($feature_ids)) {
                foreach ($feature_ids as $featureId) {
                    $feature = $featureService->checkExistFeatureOfParentCategory($parentCategory->id, $featureId);

                    if (!empty($feature)) {
                        continue;
                    }

                    $feature = ParentCategoryFeature::create([
                        'parent_category_id' => $parentCategory->id,
                        'feature_id' => $featureId,
                    ]);
                }
            }

            Session::flash('success', 'Cập nhật danh mục chính thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($parentCategory_id)
    {
        try {
            $parentCategory = ParentCategory::find($parentCategory_id);
            if (count($parentCategory->firstSubCategories) > 0) {
                Session::flash('error', 'Danh mục chính đã có danh mục phụ 1. Vui lòng xóa danh mục phụ 1 trước !');
                return false;
            }

            ParentCategory::where('id', $parentCategory_id)->delete();

            Session::flash('success', 'Xóa danh mục chính thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}