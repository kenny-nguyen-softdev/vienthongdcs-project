<?php

namespace App\Helpers;

use App\Http\Services\Product\ProductService;
use App\Models\Product;
use App\Models\Comment;
use Carbon\Carbon;

class ProductHelper
{
    const ITEM_PER_PAGE = 8;

    public static function getProductById($product_id)
    {
        $product = Product::find($product_id);

        return $product;
    }

    public static function getProductListBySubCategoryHavingPagination($request, $subCategory)
    {
        $productService = new ProductService();
        $page = $request->input('page') ?? 1;
        $products = $productService->getProductListBySubCategoryIdHavingPagination($request, $page, self::ITEM_PER_PAGE, $subCategory);

        return $products;
    }

    public static function getAllProductListBySubCategory($request, $subCategory)
    {
        $productService = new ProductService();
        $products = $productService->getAllProductListBySubCategoryId($request, $subCategory);

        return $products;
    }

    public static function calculateDifferenceBetweenTwoDays($created_date)
    {
        $created = new Carbon($created_date);
        $now = Carbon::now();
        $difference = $created->diff($now)->days < 1 ? 'Hôm nay' : $created->diffForHumans($now);

        return $difference;
    }

    public static function countNumberOfStarInComment($product_id, $starNumber)
    {
        $number = Comment::where([['product_id', '=', $product_id], ['star', '=', $starNumber],])->count('id');

        return $number;
    }

    public static function checkExistProductInSecondSubCategories($product, $secondSubCategories)
    {
        foreach ($secondSubCategories as $secondSubCategory) {
            if ($product->category_id === $secondSubCategory->id) {
                return true;
            }
        }

        return false;
    }
}