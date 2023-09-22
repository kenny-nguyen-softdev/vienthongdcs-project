<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostEditFormRequest extends FormRequest
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
            'author' => 'required',
            'featured_image' => 'required',
            'description' => 'required',
            'content' => 'required',
            'blog' => 'required',
            'parentCategory' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tên danh mục bài viết !',
            'author.required' => 'Vui lòng nhập tên tác giả bài viết !',
            'featured_image.required' => 'Vui lòng tải ảnh nổi bật lên !',
            'description.required' => 'Vui lòng nhập mô tả bài viết !',
            'content.required' => 'Vui lòng nhập nội dung bài viết !',
            'blog.required' => 'Vui lòng chọn danh mục bài viết !',
            'parentCategory.required' => 'Vui lòng chọn danh mục chính !',
        ];
    }
}