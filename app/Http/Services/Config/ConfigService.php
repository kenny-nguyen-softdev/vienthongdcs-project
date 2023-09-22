<?php

namespace App\Http\Services\Config;

use App\Models\Config;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ConfigService
{
    protected function fetchConfigInformation($attributes = [])
    {
        $config = [];
        if (!empty($attributes)) {
            $config = Config::select($attributes)->first();
        } else {
            $config = Config::first();
        }

        return $config;
    }

    function getConfigAllInformation()
    {
        $config = $this->fetchConfigInformation([]);

        return $config;
    }

    function getConfigInformationBySelectAttributes($attributes = [])
    {
        $config = $this->fetchConfigInformation($attributes);

        return $config;
    }

    function updateConfigInformation($request, $config)
    {
        try {
            $top_content = $request->input('top_content');
            $top_url = $request->input('top_url');
            $right_menu_content_1 = $request->input('right_menu_content_1');
            $right_menu_url_1 = $request->input('right_menu_url_1');
            $right_menu_content_2 = $request->input('right_menu_content_2');

            $right_menu_url_2 = $request->input('right_menu_url_2');
            $description_in_main_ingredients = $request->input('description_in_main_ingredients');
            $long_description_in_main_ingredients = $request->input('long_description_in_main_ingredients');
            $icon_in_home_page_1 = $request->input('icon_in_home_page_1');
            $see_more_url_in_main_ingredients = $request->input('see_more_url_in_main_ingredients');

            $warning_in_footer = $request->input('warning_in_footer');
            $title_in_home_page_1 = $request->input('title_in_home_page_1');
            $title_1_in_footer = $request->input('title_1_in_footer');

            $title_2_in_footer = $request->input('title_2_in_footer');
            $title_3_in_footer = $request->input('title_3_in_footer');
            $title_4_in_footer = $request->input('title_4_in_footer');
            $free_exchange = $request->input('free_exchange');

            $title_in_block_1 = $request->input('title_in_block_1');
            $sub_title_1_in_block_1 = $request->input('sub_title_1_in_block_1');
            $sub_title_2_in_block_1 = $request->input('sub_title_2_in_block_1');

            $title_in_block_2 = $request->input('title_in_block_2');
            $sub_title_1_in_block_2 = $request->input('sub_title_1_in_block_2');
            $sub_title_2_in_block_2 = $request->input('sub_title_2_in_block_2');

            $title_in_block_3 = $request->input('title_in_block_3');
            $sub_title_1_in_block_3 = $request->input('sub_title_1_in_block_3');
            $sub_title_2_in_block_3 = $request->input('sub_title_2_in_block_3');

            if ($request->hasfile('icon_in_home_page_1') || $icon_in_home_page_1 != $config->icon_in_home_page_1) {
                $file = $request->file('icon_in_home_page_1');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                if ($name != $config->icon_in_home_page_1) {
                    $file->move(public_path('storage/uploads/configs'), $name);

                    $icon_in_home_page_1 = 'configs/' . $name;
                } else {
                    $icon_in_home_page_1 = $config->icon_in_home_page_1;
                }
            }

            $config->top_content = $top_content;
            $config->top_url = $top_url;
            $config->right_menu_content_1 = $right_menu_content_1;
            $config->right_menu_url_1 = $right_menu_url_1;
            $config->right_menu_content_2 = $right_menu_content_2;
            $config->right_menu_url_2 = $right_menu_url_2;
            $config->right_menu_url_2 = $right_menu_url_2;
            $config->description_in_main_ingredients = $description_in_main_ingredients;
            $config->long_description_in_main_ingredients = $long_description_in_main_ingredients;
            $config->see_more_url_in_main_ingredients = $see_more_url_in_main_ingredients;
            $config->icon_in_home_page_1 = $icon_in_home_page_1;
            $config->warning_in_footer = $warning_in_footer;
            $config->title_in_home_page_1 = $title_in_home_page_1;
            $config->title_1_in_footer = $title_1_in_footer;
            $config->title_2_in_footer = $title_2_in_footer;
            $config->title_3_in_footer = $title_3_in_footer;
            $config->title_4_in_footer = $title_4_in_footer;
            $config->free_exchange = $free_exchange;
            $config->title_in_block_1 = $title_in_block_1;
            $config->sub_title_1_in_block_1 = $sub_title_1_in_block_1;
            $config->sub_title_2_in_block_1 = $sub_title_2_in_block_1;

            $config->title_in_block_2 = $title_in_block_2;
            $config->sub_title_1_in_block_2 = $sub_title_1_in_block_2;
            $config->sub_title_2_in_block_2 = $sub_title_2_in_block_2;

            $config->title_in_block_3 = $title_in_block_3;
            $config->sub_title_1_in_block_3 = $sub_title_1_in_block_3;
            $config->sub_title_2_in_block_3 = $sub_title_2_in_block_3;
            $config->save();

            Session::flash('success', 'Cập nhật cấu hình chung thành công');
            return $config;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}