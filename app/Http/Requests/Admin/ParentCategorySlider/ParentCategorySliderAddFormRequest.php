<?php

namespace App\Http\Requests\Admin\ParentCategorySlider;

use Illuminate\Foundation\Http\FormRequest;

class ParentCategorySliderAddFormRequest extends FormRequest
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
            'thumb' => 'required',
            'sort_by' => 'required',
            'url' => 'required',
            'title' => 'required',
            // 'sub_title' => 'required',
            'description' => 'required',
            'button_name' => 'required',
            'parentCategory' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên slider của danh mục chính !',
            'thumb.required' => 'Vui lòng tải ảnh slider của danh mục chính lên !',
            'sort_by.required' => 'Vui lòng nhập thứ tự sắp xếp !',
            'url.required' => 'Vui lòng nhập đường dẫn của slider của danh mục chính !',
            'title.required' => 'Vui lòng nhập tiêu đề của slider của danh mục chính !',
            // 'sub_title.required' => 'Vui lòng nhập tiêu đề phụ của slider của danh mục chính !',
            'description.required' => 'Vui lòng nhập mô tả của slider của danh mục chính !',
            'button_name.required' => 'Vui lòng nhập tên button của slider của danh mục chính !',
            'parentCategory.required' => 'Vui lòng chọn danh mục chính !',
        ];
    }
}