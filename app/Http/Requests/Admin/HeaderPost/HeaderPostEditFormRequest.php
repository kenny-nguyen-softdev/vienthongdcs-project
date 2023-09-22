<?php

namespace App\Http\Requests\Admin\HeaderPost;

use Illuminate\Foundation\Http\FormRequest;

class HeaderPostEditFormRequest extends FormRequest
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
            'icon_code' => 'required',
            'sort_by' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục bài viết !',
            'icon_code.required' => 'Vui lòng nhập code icon !',
            'sort_by.required' => 'Vui lòng số thứ tự sắp xếp !',
            'content.required' => 'Vui lòng nhập nội dung bài viết !',
        ];
    }
}
