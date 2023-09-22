<?php

namespace App\Http\Requests\Admin\Branch;

use Illuminate\Foundation\Http\FormRequest;

class BranchEditFormRequest extends FormRequest
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
            'hotline' => 'required',
            'tel' => 'required',
            'delivery_phone_number' => 'required',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'housenumber_street' => 'required',
            'delivery_province' => 'required',
            'delivery_district' => 'required',
            'delivery_ward' => 'required',
            'delivery_housenumber_street' => 'required',
            'branchLocation' => 'required',
            'map_url' => 'required',
            'map' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên công ty',
            'hotline.required' => 'Vui lòng nhập đường dây nóng của công ty',
            'tel.required' => 'Vui lòng nhập số điện thoại',
            'delivery_phone_number.required' => 'Vui lòng nhập số điện thoại giao dịch',
            'province.required' => 'Vui lòng chọn tỉnh / thành phố của công ty',
            'district.required' => 'Vui lòng chọn quận / huyện của công ty',
            'ward.required' => 'Vui lòng chọn phường / xã của công ty',
            'housenumber_street.required' => 'Vui lòng nhập số nhà, tên đường của công ty',
            'delivery_province.required' => 'Vui lòng chọn tỉnh / thành phố giao nhận',
            'delivery_district.required' => 'Vui lòng chọn quận / huyện giao nhận',
            'delivery_ward.required' => 'Vui lòng chọn phường / xã giao nhận',
            'delivery_housenumber_street.required' => 'Vui lòng nhập số nhà, tên đường giao nhận',
            'branchLocation.required' => 'Vui lòng nhập số nhà, tên đường giao nhận',
            'map_url.required' => 'Vui lòng vị trí của chi nhánh',
            'map.required' => 'Vui lòng nhập bản đồ của công ty',
        ];
    }
}