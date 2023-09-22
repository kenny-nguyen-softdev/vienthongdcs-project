<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddFormRequest extends FormRequest
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
            'model' => 'required',
            'insurance' => 'required',
            'inventory_qty' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            // 'origin' => 'required',
            // 'configuration' => 'required',
            // 'feature' => 'required',
            'parentCategory' => 'required',
            'firstSubCategory' => 'required',
            'secondSubCategory' => 'required',
            // 'brand' => 'required',
            'star' => 'required',
            'featured_image' => 'required',
            'hover_featured_image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'model.required' => 'Vui lòng nhập model của sản phẩm',
            'insurance.required' => 'Vui lòng nhập thời hạn bảo hành',
            'inventory_qty.required' => 'Vui lòng nhập số lượng tồn kho',
            'price.required' => 'Vui lòng nhập giá gốc',
            'sale_price.required' => 'Vui lòng nhập giá giảm',
            // 'origin.required' => 'Vui lòng chọn xuất xứ của sản phẩm',
            // 'configuration.required' => 'Vui lòng chọn cấu hình của sản phẩm',
            // 'feature.required' => 'Vui lòng chọn tính năng của sản phẩm',
            'parentCategory.required' => 'Vui lòng chọn danh mục chính',
            'firstSubCategory.required' => 'Vui lòng chọn danh mục phụ 1',
            'secondSubCategory.required' => 'Vui lòng chọn danh mục phụ 2',
            // 'brand.required' => 'Vui lòng chọn thương hiệu',
            'star.required' => 'Vui lòng nhập số sao',
            'featured_image.required' => 'Vui lòng tải ảnh nổi bật 1 lên',
            'hover_featured_image.required' => 'Vui lòng tải ảnh nổi bật 2 lên',
        ];
    }
}