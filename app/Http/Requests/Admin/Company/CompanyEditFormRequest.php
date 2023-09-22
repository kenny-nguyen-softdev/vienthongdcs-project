<?php

namespace App\Http\Requests\Admin\Company;

use Illuminate\Foundation\Http\FormRequest;

class CompanyEditFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'tax_code' => 'required',
            'email' => 'required',
            'hotline' => 'required',
            'phone_number' => 'required',
            'delivery_phone_number' => 'required',
            'zalo_phone_number' => 'required',
            'logo' => 'required',
            'favicon' => 'required',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'housenumber_street' => 'required',
            'delivery_province' => 'required',
            'delivery_district' => 'required',
            'delivery_ward' => 'required',
            'delivery_housenumber_street' => 'required',
            'facebook_url' => 'required',
            'zalo_url' => 'required',
            'twitter_url' => 'required',
            'youtube_url' => 'required',
            'map_url' => 'required',
            'map' => 'required',
            'account_no' => 'required',
            'bank_name' => 'required',
            'survey_title' => 'required',
            'survey_content' => 'required',
            'survey_featured_image' => 'required',
            'survey_img_1' => 'required',
            'survey_img_2' => 'required',
            'survey_img_3' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên công ty',
            'tax_code.required' => 'Vui lòng nhập mã số thuế',
            'email.required' => 'Vui lòng nhập email công ty',
            'hotline.required' => 'Vui lòng nhập đường dây nóng của công ty',
            'phone_number.required' => 'Vui lòng nhập số điện thoại',
            'delivery_phone_number.required' => 'Vui lòng nhập số điện thoại giao dịch',
            'zalo_phone_number.required' => 'Vui lòng nhập số điện thoại Zalo',
            'logo.required' => 'Vui lòng tải ảnh logo công ty',
            'favicon.required' => 'Vui lòng tải ảnh favicon công ty',
            'province.required' => 'Vui lòng chọn tỉnh / thành phố của công ty',
            'district.required' => 'Vui lòng chọn quận / huyện của công ty',
            'ward.required' => 'Vui lòng chọn phường / xã của công ty',
            'housenumber_street.required' => 'Vui lòng nhập số nhà, tên đường của công ty',
            'delivery_province.required' => 'Vui lòng chọn tỉnh / thành phố giao nhận',
            'delivery_district.required' => 'Vui lòng chọn quận / huyện giao nhận',
            'delivery_ward.required' => 'Vui lòng chọn phường / xã giao nhận',
            'delivery_housenumber_street.required' => 'Vui lòng nhập số nhà, tên đường giao nhận',
            'facebook_url.required' => 'Vui lòng nhập đường liên kết đến facebook của công ty',
            'zalo_url.required' => 'Vui lòng nhập đường liên kết đến zalo của công ty',
            'twitter_url.required' => 'Vui lòng nhập đường liên kết đến twitter của công ty',
            'youtube_url.required' => 'Vui lòng nhập đường liên kết đến youtube của công ty',
            'map_url.required' => 'Vui lòng nhập đường liên kết đến bản đồ của công ty',
            'map.required' => 'Vui lòng nhập bản đồ của công ty',
            'account_no.required' => 'Vui lòng nhập số tài khoản ngân hàng của công ty',
            'bank_name.required' => 'Vui lòng nhập tên ngân hàng thụ hưởng của công ty',
            'survey_title' => 'Vui lòng nhập tiêu đề khảo sát lắp đặt miễn phí',
            'survey_content' => 'Vui lòng nhập nội dung khảo sát lắp đặt miễn phí',
            'survey_featured_image' => 'Vui lòng tải ảnh nổi bật khảo sát lắp đặt miễn phí',
            'survey_img_1' => 'Vui lòng tải ảnh banner 1 khảo sát lắp đặt miễn phí',
            'survey_img_2' => 'Vui lòng tải ảnh banner 2 khảo sát lắp đặt miễn phí',
            'survey_img_3' => 'Vui lòng tải ảnh banner 3 khảo sát lắp đặt miễn phí',
        ];
    }
}