<?php

namespace App\Http\Requests\Admin\FirstSubCategory;

use Illuminate\Foundation\Http\FormRequest;

class FirstSubCategoryAddFormRequest extends FormRequest
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
            'parentCategory' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục phụ 1 !',
            'parentCategory.required' => 'Vui lòng chọn danh mục chính !',
        ];
    }
}