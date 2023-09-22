<?php

namespace App\Http\Services\Company;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CompanyService
{
    protected function fetchCompanyInformation($attributes = [])
    {
        $company = [];
        if (!empty($attributes)) {
            $company = Company::select($attributes)->first();
        } else {
            $company = Company::first();
        }

        return $company;
    }

    function getCompanyAllInformation()
    {
        $company = $this->fetchCompanyInformation([]);

        return $company;
    }

    function getCompanyInformationBySelectAttributes($attributes = [])
    {
        $company = $this->fetchCompanyInformation($attributes);

        return $company;
    }

    function updateCompanyInformation($request, $company)
    {
        try {
            $name = $request->input('name');
            $tax_code = $request->input('tax_code');
            $email = $request->input('email');

            $hotline = $request->input('hotline');
            $phone_number = $request->input('phone_number');
            $delivery_phone_number = $request->input('delivery_phone_number');
            $zalo_phone_number = $request->input('zalo_phone_number');

            $ward_id = $request->input('ward');
            $housenumber_street = $request->input('housenumber_street');

            $delivery_ward_id = $request->input('delivery_ward');
            $delivery_housenumber_street = $request->input('delivery_housenumber_street');

            $favicon = $request->input('favicon');
            $survey_title = $request->input('survey_title');
            $survey_content = $request->input('survey_content');
            $survey_featured_image = $request->input('survey_featured_image');
            $survey_img_1 = $request->input('survey_img_1');
            $survey_img_2 = $request->input('survey_img_2');
            $survey_img_3 = $request->input('survey_img_3');
            // $why_buy_in = $request->input('why_buy_in');
            $logo = $request->input('logo');
            $facebook_url = $request->input('facebook_url');
            $zalo_url = $request->input('zalo_url');
            $twitter_url = $request->input('twitter_url');
            $youtube_url = $request->input('youtube_url');

            $bank_name = $request->input('bank_name');
            $account_no = $request->input('account_no');

            $map = $request->input('map');
            $map_url = $request->input('map_url');

            $script_header = $request->input('script_header');
            $script_body = $request->input('script_body');
            $script_footer = $request->input('script_footer');

            $company->name = $name;
            $company->tax_code = $tax_code;
            $company->email = $email;
            $company->hotline = $hotline;
            $company->phone_number = $phone_number;
            $company->delivery_phone_number = $delivery_phone_number;
            $company->zalo_phone_number = $zalo_phone_number;
            $company->favicon = $favicon;
            $company->ward_id = $ward_id;
            $company->housenumber_street = $housenumber_street;
            $company->delivery_ward_id = $delivery_ward_id;
            $company->delivery_housenumber_street = $delivery_housenumber_street;
            $company->survey_title = $survey_title;
            $company->survey_content = $survey_content;
            $company->survey_featured_image = $survey_featured_image;
            $company->survey_img_1 = $survey_img_1;
            $company->survey_img_2 = $survey_img_2;
            $company->survey_img_3 = $survey_img_3;
            // $company->why_buy_in = $why_buy_in;
            $company->logo = $logo;
            $company->facebook_url = $facebook_url;
            $company->zalo_url = $zalo_url;
            $company->twitter_url = $twitter_url;
            $company->youtube_url = $youtube_url;
            $company->bank_name = $bank_name;
            $company->account_no = $account_no;
            $company->map = $map;
            $company->map_url = $map_url;
            $company->script_header = $script_header;
            $company->script_body = $script_body;
            $company->script_footer = $script_footer;
            $company->save();

            Session::flash('success', 'Cập nhật thông tin công ty thành công');
            return $company;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}