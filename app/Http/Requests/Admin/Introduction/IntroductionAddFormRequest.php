<?php

namespace App\Http\Requests\Admin\Introduction;

use Illuminate\Foundation\Http\FormRequest;

class IntroductionAddFormRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tên danh mục bài viết !',
            'content.required' => 'Vui lòng nhập nội dung bài viết !',
        ];
    }
}