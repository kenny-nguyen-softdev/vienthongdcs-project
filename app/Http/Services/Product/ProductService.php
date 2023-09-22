<?php

namespace App\Http\Services\Product;

use App\Models\ParentCategory;
use App\Models\ProductImageItem;
use App\Models\Product;
use App\Models\PromotionProduct;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductService
{
    protected $item_per_page;

    function getAllProducts()
    {
        $products = Product::all();

        return $products;
    }

    function getFirstProductBySubCategoryId($subCategoryId)
    {
        $product = Product::where(['category_id' => $subCategoryId, 'featured' => 1, 'is_active' => 1])
            ->orderByDesc('created_date')
            ->first();

        return $product;
    }

    function getAllProductListOrderByCreatedDateDesc()
    {
        $products = Product::orderByDesc('created_date')->get();

        return $products;
    }

    function getFirstProductBySubCategoryIdOrderByCreatedDateAsc($subCategoryId)
    {
        $product = Product::where(['category_id' => $subCategoryId, 'featured' => 1, 'is_active' => 1])
            ->orderBy('created_date', 'ASC')
            ->first();

        return $product;
    }

    function getProductBySlug($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return $product;
    }

    function getProductListBySlug($slug)
    {
        $products = Product::where('slug', $slug)->get();

        return $products;
    }


    function getProductById($id)
    {
        $product = Product::find($id);

        return $product;
    }

    function getByPattern($pattern)
    {
        $condition = [];
        $condition[] = ['name', 'LIKE', "%$pattern%"];
        $condition[] = ['is_active', '=', "1"];

        $products = Product::where($condition)->get();

        return $products;
    }

    function getAllProductListByParentCategory($request, $category)
    {
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $feature = $request->input('feature');
        $origin = $request->input('origin');
        $configuration = $request->input('configuration');
        $brand_id = $request->input('brand_id');
        $category_id = $request->input('category_id');

        $query = ParentCategory::join('first_sub_categories', 'parent_categories.id', '=', 'first_sub_categories.parent_category_id')
            ->join('second_sub_categories', 'first_sub_categories.id', '=', 'second_sub_categories.first_sub_category_id')
            ->join('products', 'first_sub_categories.id', '=', 'products.category_id')
            ->select('products.*')
            ->where('parent_categories.id', $category->id)
            ->orderBy('products.created_date', "desc");

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['products.is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        if (!empty($category_id)) {
            $condition[] = ['category_id', $category_id];
        }

        if (!empty($feature)) {
            $condition[] = ['feature_id', $feature];
        }

        if (!empty($origin)) {
            $condition[] = ['origin_id', $origin];
        }


        if (!empty($configuration)) {
            $condition[] = ['configuration_id', $configuration];
        }


        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getProductListByParentCategoryHavingPagination($request, $page, $item_per_page, $category)
    {
        $this->item_per_page = $item_per_page;

        $limit = $request->input('limit');

        if (!empty($limit)) {
            $this->item_per_page = $limit;
        }

        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $feature = $request->input('feature');
        $origin = $request->input('origin');
        $configuration = $request->input('configuration');
        $brand_id = $request->input('brand_id');
        $category_id = $request->input('category_id');

        $query = ParentCategory::join('first_sub_categories', 'parent_categories.id', '=', 'first_sub_categories.parent_category_id')
            ->join('second_sub_categories', 'first_sub_categories.id', '=', 'second_sub_categories.first_sub_category_id')
            ->join('products', 'first_sub_categories.id', '=', 'products.category_id')
            ->select('products.*')
            ->where('parent_categories.id', $category->id)
            ->orderBy('products.created_date', "desc");

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['products.is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }
        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        if (!empty($category_id)) {
            $condition[] = ['category_id', $category_id];
        }

        if (!empty($feature)) {
            $condition[] = ['feature_id', $feature];
        }

        if (!empty($origin)) {
            $condition[] = ['origin_id', $origin];
        }


        if (!empty($configuration)) {
            $condition[] = ['configuration_id', $configuration];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }

    function getAllProductListByPattern($request, $pattern, $secondSubCategoryIds)
    {
        $arrange = $request->input('sort');
        $query = Product::whereIn('category_id', $secondSubCategoryIds);

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['name', 'LIKE', "%$pattern%"];
        $condition[] = ['is_active', '=', "1"];

        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getProductListByPatternHavingPagination($request, $page, $item_per_page, $pattern, $secondSubCategoryIds)
    {
        $this->item_per_page = $item_per_page;

        $limit = $request->input('limit');

        if (!empty($limit)) {
            $this->item_per_page = $limit;
        }

        $arrange = $request->input('sort');
        $query = Product::whereIn('category_id', $secondSubCategoryIds);

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['name', 'LIKE', "%$pattern%"];
        $condition[] = ['is_active', '=', "1"];

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }


    function getAllProductListByFirstSubCategoryId($request, $category)
    {
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $brand_id = $request->input('brand_id');
        $feature = $request->input('feature');
        $origin = $request->input('origin');
        $configuration = $request->input('configuration');
        $query = $category->products()->orderBy('created_date', 'desc');

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        // $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        if (!empty($feature)) {
            $condition[] = ['feature_id', $feature];
        }

        if (!empty($origin)) {
            $condition[] = ['origin_id', $origin];
        }


        if (!empty($configuration)) {
            $condition[] = ['configuration_id', $configuration];
        }

        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getProductListByFirstSubCategoryIdHavingPagination($request, $page, $item_per_page, $category)
    {
        $this->item_per_page = $item_per_page;

        $limit = $request->input('limit');

        if (!empty($limit)) {
            $this->item_per_page = $limit;
        }
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $brand_id = $request->input('brand_id');
        $feature = $request->input('feature');
        $origin = $request->input('origin');
        $configuration = $request->input('configuration');
        $query = $category->products()->orderBy('created_date', 'desc');

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        // $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        if (!empty($feature)) {
            $condition[] = ['feature_id', $feature];
        }

        if (!empty($origin)) {
            $condition[] = ['origin_id', $origin];
        }


        if (!empty($configuration)) {
            $condition[] = ['configuration_id', $configuration];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }

    function getAllProductListBySecondSubCategoryId($request, $category)
    {
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $brand_id = $request->input('brand_id');
        $feature = $request->input('feature');
        $origin = $request->input('origin');
        $configuration = $request->input('configuration');
        $query = $category->products()->orderBy('created_date', 'desc');

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        // $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        if (!empty($feature)) {
            $condition[] = ['feature_id', $feature];
        }

        if (!empty($origin)) {
            $condition[] = ['origin_id', $origin];
        }


        if (!empty($configuration)) {
            $condition[] = ['configuration_id', $configuration];
        }

        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getProductListBySecondSubCategoryIdHavingPagination($request, $page, $item_per_page, $category)
    {
        $this->item_per_page = $item_per_page;

        $limit = $request->input('limit');

        if (!empty($limit)) {
            $this->item_per_page = $limit;
        }
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $brand_id = $request->input('brand_id');
        $feature = $request->input('feature');
        $origin = $request->input('origin');
        $configuration = $request->input('configuration');
        $query = $category->products()->orderBy('created_date', 'desc');

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        // $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }
        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        if (!empty($feature)) {
            $condition[] = ['feature_id', $feature];
        }

        if (!empty($origin)) {
            $condition[] = ['origin_id', $origin];
        }


        if (!empty($configuration)) {
            $condition[] = ['configuration_id', $configuration];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }

    function getProductListByCategoryId($category_id)
    {
        $products = Product::where('category_id', $category_id)->get();

        return $products;
    }

    function getProductListBySubCategoryIdHavingPaginationViaAjax($request, $page, $item_per_page, $category_id)
    {
        $this->item_per_page = $item_per_page;
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $brand_id = $request->input('brand_id');
        $category = SubCategory::find($category_id);
        $query = $category->products();

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('sale_price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('sale_price', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($brand_id)) {
            $condition[] = ['brand_id', $brand_id];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->limit($this->item_per_page)
            ->get(); //nối URL parameters

        return $products;
    }

    function getAllProductListByBrandIdInParentCategory($request, $brand, $subCategoryIds)
    {
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $category_id = $request->input('category_id');
        $query = $brand->products()->orderBy('created_date', 'desc');

        $query->whereIn('category_id', $subCategoryIds);

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('price', 'desc');
                    }
                case 'sold':
                    if ($con == 'desc') {
                        $query->orderBy('sold_qty', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($category_id)) {
            $condition[] = ['category_id', $category_id];
        }

        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getProductListByBrandIdHavingPaginationInParentCategory($request, $page, $item_per_page, $brand, $subCategoryIds)
    {
        $this->item_per_page = $item_per_page;
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $category_id = $request->input('category_id');
        $query = $brand->products()->orderBy('created_date', 'desc');

        $query->whereIn('category_id', $subCategoryIds);

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('price', 'desc');
                    }
                case 'sold':
                    if ($con == 'desc') {
                        $query->orderBy('sold_qty', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($category_id)) {
            $condition[] = ['category_id', $category_id];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }

    function getAllProductListByBrandId($request, $brand)
    {
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $category_id = $request->input('category_id');
        $query = $brand->products()->orderBy('created_date', 'desc');

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('price', 'desc');
                    }
                case 'sold':
                    if ($con == 'desc') {
                        $query->orderBy('sold_qty', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($category_id)) {
            $condition[] = ['category_id', $category_id];
        }

        $query->where(
            $condition
        );

        $products = $query->get(); //nối URL parameters

        return $products;
    }

    function getProductListByBrandIdHavingPagination($request, $page, $item_per_page, $brand)
    {
        $this->item_per_page = $item_per_page;
        $arrange = $request->input('sort');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $category_id = $request->input('category_id');
        $query = $brand->products()->orderBy('created_date', 'desc');

        if (!empty($arrange)) {
            $arrayCon = explode('-', $arrange);
            $type = $arrayCon[0];
            $con = $arrayCon[1];

            switch ($type) {
                case 'created':
                    if ($con == 'asc') {
                        $query->orderBy('created_date', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('created_date', 'desc');
                    }
                    break;
                case 'alpha':
                    if ($con == 'asc') {
                        $query->orderBy('name', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('name', 'desc');
                    }
                    break;
                case 'price':
                    if ($con == 'asc') {
                        $query->orderBy('price', 'asc');
                    } else if ($con == 'desc') {
                        $query->orderBy('price', 'desc');
                    }
                case 'sold':
                    if ($con == 'desc') {
                        $query->orderBy('sold_qty', 'desc');
                    }
                    break;
            }
        }

        $condition = [];
        $condition[] = ['is_active', '=', "1"];

        if (!empty($price_from) && !empty($price_to)) {
            $condition[] = ['sale_price', '<', $price_to];

            $condition[] = ['sale_price', '>', $price_from];
        }

        if (!empty($category_id)) {
            $condition[] = ['category_id', $category_id];
        }

        $query->where(
            $condition
        );

        $products = $query->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->paginate($this->item_per_page)
            ->withQueryString(); //nối URL parameters

        return $products;
    }

    function getRelatedProductBySubCategoryId($item_per_page, $category_id)
    {
        $condition = [];
        $condition[] = ['category_id', '=', $category_id];
        $condition[] = ['is_active', '=', "1"];

        $this->item_per_page = $item_per_page;
        $products = Product::where($condition)->orderBy('created_date', 'desc')->limit($this->item_per_page)->get();

        return $products;
    }

    function updateDescriptionDetails($product, $request)
    {
        try {
            $product->description_details = $request->input('description_details');
            $product->save();

            Session::flash('success', 'Cập nhật mô tả chi tiết sản phẩm thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật mô tả mô tả chi tiết sản phẩm thất bại');
            return false;
        }
    }

    public function save($request)
    {
        try {
            $currentDatetime = Carbon::now();

            $model = $request->input('model');
            $barcode = $request->input('barcode');
            $insurance = $request->input('insurance');
            $name = $request->input('name');
            $price = $request->input('price');
            $inventory_qty = $request->input('inventory_qty');
            $featured_image = $request->input('featured_image');
            $hover_featured_image = $request->input('hover_featured_image');
            $sale_price = $request->input('sale_price');
            $category_id = $request->input('secondSubCategory');
            $brand_id = $request->input('brand');
            $star = $request->input('star');
            $description = $request->input('description');
            $description_detail = $request->input('description_detail');
            $technical_statistics = $request->input('technical_statistics');
            $featured = $request->input('featured');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');
            $origin = $request->input('origin');
            $configuration = $request->input('configuration');
            $feature = $request->input('feature');

            if (!$featured) {
                $featured = 0;
            }

            if (!$is_active) {
                $is_active = 0;
            }

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $checkedProduct = $this->getProductBySlug($slug);

            if (!empty($checkedProduct)) {
                Session::flash('error', 'Tên sản phẩm đã tồn tại ! Vui lòng thử lại.');
                return false;
            }

            $product = Product::create([
                'barcode' => $barcode,
                'model' => $model,
                'name' => $name,
                'insurance' => $insurance,
                'price' => $price,
                'sale_price' => $sale_price,
                'featured_image' => $featured_image,
                'hover_featured_image' => $hover_featured_image,
                'inventory_qty' => $inventory_qty,
                'featured' => $featured,
                'category_id' => $category_id,
                'brand_id' => $brand_id,
                'slug' => $slug,
                'created_date' => $currentDatetime,
                'description' => !empty($description) ? $description : '',
                'description_detail' => !empty($description_detail) ? $description_detail : '',
                'technical_statistics' => !empty($technical_statistics) ? $technical_statistics : '',
                'star' => $star,
                'is_active' => $is_active,
                'title_seo' => $title_seo,
                'meta_des' => $meta_des,
                'meta_key' => $meta_key,
                'origin_id' => $origin,
                'configuration_id' => $configuration,
                'feature_id' => $feature,
            ]);

            if ($request->hasfile('filenames')) {
                foreach ($request->file('filenames') as $file) {
                    $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                    $file->move(public_path('storage/uploads/products'), $name);

                    $storedName = 'products/' . $name;

                    $imageItem = ProductImageItem::create([
                        'product_id' => $product->id,
                        'name' => $storedName,
                    ]);
                }
            }

            // $ids = $request->input('ids');

            // if (!empty($ids) && count($ids) > 0) {
            //     foreach ($ids as $promotion_id) {
            //         $promotionProduct = PromotionProduct::where('promotion_id', $promotion_id)
            //             ->where('product_id', $product->id)
            //             ->first();

            //         if (!empty($promotionProduct)) {
            //             continue;
            //         }

            //         PromotionProduct::create(
            //             [
            //                 'promotion_id' => (string) $promotion_id,
            //                 'product_id' => (string) $product->id,
            //                 'qty' => 1,
            //             ]
            //         );
            //     }
            // }

            Session::flash('success', 'Tạo sản phẩm thành công');
            return $product;
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo sản phẩm thất bại !!!');
            return false;
        }
    }

    public function update($product, $request)
    {
        try {
            $product_id = $product->id;
            $model = $request->input('model');
            $barcode = $request->input('barcode');
            $insurance = $request->input('insurance');
            $name = $request->input('name');
            $price = $request->input('price');
            $created_date = date('Y-m-d h:m:s', strtotime($request->input('created_date')));
            $inventory_qty = $request->input('inventory_qty');
            $featured_image = $request->input('featured_image');
            $hover_featured_image = $request->input('hover_featured_image');
            $sale_price = $request->input('sale_price');
            $category_id = $request->input('secondSubCategory');
            $brand_id = $request->input('brand');
            $star = $request->input('star');
            $description = $request->input('description');
            $description_detail = $request->input('description_detail');
            $technical_statistics = $request->input('technical_statistics');
            $featured = $request->input('featured');
            $is_active = $request->input('is_active');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');
            $origin = $request->input('origin');
            $configuration = $request->input('configuration');
            $feature = $request->input('feature');

            if ($featured_image != $product->featured_image) {
                Storage::delete("public/uploads/" . $product->featured_image);
            }

            if ($hover_featured_image != $product->hover_featured_image) {
                Storage::delete("public/uploads/" . $product->hover_featured_image);
            }

            if (!$featured) {
                $featured = 0;
            }

            if (!$is_active) {
                $is_active = 0;
            }

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $checkedProduct = $this->getProductBySlug($slug);

            if (($product->name != $name) && !empty($checkedProduct)) {
                Session::flash('error', 'Tên sản phẩm đã tồn tại ! Vui lòng thử lại.');
                return false;
            }

            Product::where('id', $product_id)
                ->update([
                    'barcode' => $barcode,
                    'model' => $model,
                    'name' => $name,
                    'insurance' => $insurance,
                    'price' => $price,
                    'sale_price' => $sale_price,
                    'featured_image' => $featured_image,
                    'hover_featured_image' => $hover_featured_image,
                    'inventory_qty' => $inventory_qty,
                    'featured' => $featured,
                    'category_id' => $category_id,
                    'brand_id' => $brand_id,
                    'slug' => $slug,
                    'created_date' => $created_date,
                    'description' => !empty($description) ? $description : '',
                    'description_detail' => !empty($description_detail) ? $description_detail : '',
                    'technical_statistics' => !empty($technical_statistics) ? $technical_statistics : '',
                    'star' => $star,
                    'is_active' => $is_active,
                    'title_seo' => $title_seo,
                    'meta_des' => $meta_des,
                    'meta_key' => $meta_key,
                    'origin_id' => $origin,
                    'configuration_id' => $configuration,
                    'feature_id' => $feature,
                ]);

            // dd($request->input('images_uploaded'));

            if (!empty($request->input('images_uploaded'))) {
                foreach ($product->images as $image) {
                    if (empty($request->input('images_uploaded')) || (!in_array($image->id, $request->input('images_uploaded')))) {

                        Storage::delete("public/uploads/" . $image->name);
                        ProductImageItem::where('id', $image->id)->delete();
                    }
                }
            }

            if ($request->hasfile('filenames')) {
                foreach ($request->file('filenames') as $file) {
                    $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                    $file->move(public_path('storage/uploads/products'), $name);

                    $storedName = 'products/' . $name;

                    $imageItem = ProductImageItem::create([
                        'product_id' => $product->id,
                        'name' => $storedName,
                    ]);
                }
            }

            // $ids = $request->input('ids');

            // foreach ($product->promotionProducts as $promotionProduct) {
            //     if (empty($ids) || (!in_array($promotionProduct->promotion_id, $ids))) {
            //         PromotionProduct::where('promotion_id', $promotionProduct->promotion_id)
            //             ->where('product_id', $product_id)
            //             ->delete();
            //     }
            // }


            // if (!empty($ids) && count($ids) > 0) {
            //     foreach ($ids as $promotion_id) {
            //         $promotionProduct = PromotionProduct::where('promotion_id', $promotion_id)
            //             ->where('product_id', $product->id)
            //             ->first();

            //         if (!empty($promotionProduct)) {
            //             continue;
            //         }

            //         PromotionProduct::create(
            //             [
            //                 'promotion_id' => (string) $promotion_id,
            //                 'product_id' => (string) $product->id,
            //                 'qty' => 1,
            //             ]
            //         );
            //     }
            // }

            Session::flash('success', 'Cập nhật sản phẩm thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật sản phẩm thất bại ! Vui lòng thử lại.');
            return false;
        }
    }

    public function delete($product_id)
    {
        try {
            $product = Product::find($product_id);
            if (count($product->orderItems) > 0) {
                Session::flash('error', 'Sản phẩm đã có trong đơn hàng. Vui lòng xóa sản phẩm trong đơn hàng trước !');
                return false;
            }

            $product = Product::find($product_id);
            Storage::delete("public/uploads/" . $product->featured_image);
            Storage::delete("public/uploads/" . $product->hover_featured_image);

            Product::where('id', $product_id)->delete();

            Session::flash('success', 'Xóa sản phẩm thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Xóa sản phẩm thất bại');
            return false;
        }
    }

    public function saveImage($product, $request)
    {
        try {
            $image = $request->input('featured_image');

            $imageItem = ProductImageItem::create([
                'product_id' => $product->id,
                'name' => $image,
            ]);

            Session::flash('success', 'Thêm hình ảnh sản phẩm thành công');
            return $imageItem;
        } catch (\Exception $error) {
            Session::flash('error', 'Thêm hình ảnh sản phẩm thất bại');
            return false;
        }
    }

    public function deleteImageOfProduct($image_item_id)
    {
        try {
            $imageItem = ProductImageItem::find($image_item_id);
            Storage::delete("public/uploads/" . $imageItem->name);

            ProductImageItem::where('id', $image_item_id)->delete();

            Session::flash('success', 'Xóa hình ảnh của sản phẩm thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Xóa hình ảnh của sản phẩm thất bại');
            return false;
        }
    }

    public function getAllImageItemOfProduct()
    {
        $images = ProductImageItem::all();

        return $images;
    }

    public function duplicateInformationByProductId($product_id)
    {
        try {
            $oldProduct = Product::find($product_id);
            $currentDatetime = Carbon::now();

            $barcode = $oldProduct->barcode;
            $model = $oldProduct->model;
            $insurance = $oldProduct->insurance;
            $name = $oldProduct->name;
            $price = $oldProduct->price;
            $sale_price = $oldProduct->sale_price;
            $featured_image = $oldProduct->featured_image;
            $hover_featured_image = $oldProduct->hover_featured_image;
            $inventory_qty = $oldProduct->inventory_qty;
            $category_id = $oldProduct->category_id;
            $brand_id = $oldProduct->brand_id;
            $description = $oldProduct->description;
            $description_detail = $oldProduct->description_detail;
            $technical_statistics = $oldProduct->technical_statistics;
            $star = $oldProduct->star;
            $featured = $oldProduct->featured;
            $is_active = $oldProduct->is_active;
            $title_seo = $oldProduct->title_seo;
            $meta_des = $oldProduct->meta_des;
            $meta_key = $oldProduct->meta_key;
            $origin = $oldProduct->origin_id;
            $configuration = $oldProduct->configuration_id;
            $feature = $oldProduct->feature_id;

            if (!$featured) {
                $featured = 0;
            }

            if (!$is_active) {
                $is_active = 0;
            }

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $productList = $this->getProductListBySlug($slug);
            if (count($productList) > 0) {
                $count = 1;
                foreach ($productList as $product) {
                    $count++;
                }
                $slugString = $name . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }

            $product = Product::create([
                'barcode' => $barcode,
                'model' => $model,
                'name' => $name,
                'insurance' => $insurance,
                'price' => $price,
                'sale_price' => $sale_price,
                'featured_image' => $featured_image,
                'hover_featured_image' => $hover_featured_image,
                'inventory_qty' => $inventory_qty,
                'featured' => $featured,
                'category_id' => $category_id,
                'brand_id' => $brand_id,
                'slug' => $slug,
                'created_date' => $currentDatetime,
                'description' => !empty($description) ? $description : '',
                'description_detail' => !empty($description_detail) ? $description_detail : '',
                'technical_statistics' => !empty($technical_statistics) ? $technical_statistics : '',
                'star' => $star,
                'is_active' => $is_active,
                'title_seo' => $title_seo,
                'meta_des' => $meta_des,
                'meta_key' => $meta_key,
                'origin_id' => $origin,
                'configuration_id' => $configuration,
                'feature_id' => $feature,
            ]);

            Session::flash('success', 'Sao chép thông tin sản phẩm thành công');
            return $product;
        } catch (\Exception $err) {
            Session::flash('error', 'Sao chép thông tin sản phẩm thất bại !!!');
            return false;
        }
    }

    function getLastestProductListHavingPromotionHavingLimit($limit)
    {
        $products = Product::orderBy('created_date', 'desc')->get();

        return $products;
    }

    function getLastestProductListHavingLimit($limit)
    {
        $lastestProducts = Product::orderBy('created_date', 'desc')->limit($limit)->get();

        return $lastestProducts;
    }
}
