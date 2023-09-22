<?php

namespace App\Http\Requests\Admin\ParentCategory;

use Illuminate\Foundation\Http\FormRequest;

class ParentCategoryEditFormRequest extends FormRequest
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
            'icon_image' => 'required',
            'sort_by' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục chính !',
            'icon_image.required' => 'Vui lòng tải hình icon của danh mục chính lên !',
            'sort_by.required' => 'Vui lòng thứ tự sắp xếp của danh mục chính !',
        ];
    }
}