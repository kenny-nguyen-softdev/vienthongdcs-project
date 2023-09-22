<?php

namespace App\Http\Requests\Admin\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerEditFormRequest extends FormRequest
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
            'long_image' => 'required',
            'short_image_1' => 'required',
            'short_image_2' => 'required',
            'long_image_mobile' => 'required',
            'short_image_1_mobile' => 'required',
            'short_image_2_mobile' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên banner !',
            'long_image.required' => 'Vui lòng tải ảnh banner dài lên !',
            'short_image_1.required' => 'Vui lòng tải ảnh banner 1 ngắn lên !',
            'short_image_2.required' => 'Vui lòng tải ảnh banner 2 ngắn lên !',
            'long_image_mobile.required' => 'Vui lòng tải ảnh banner dài mobile lên !',
            'short_image_1_mobile.required' => 'Vui lòng tải ảnh banner 1 ngắn mobile lên !',
            'short_image_2_mobile.required' => 'Vui lòng tải ảnh banner 2 ngắn mobile lên !',
        ];
    }
}