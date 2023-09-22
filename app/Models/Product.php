<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'barcode',
        'model',
        'name',
        'insurance',
        'created_date',
        'description',
        'price',
        'sale_price',
        'hover_featured_image',
        'featured_image',
        'inventory_qty',
        'description_detail',
        'technical_statistics',
        'star',
        'is_active',
        'featured',
        'category_id',
        'brand_id',
        'slug',
        'origin_id',
        'configuration_id',
        'feature_id',
        'title_seo',
        'meta_des',
        'meta_key',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'products';

    public function secondSubCategory()
    {
        return $this->belongsTo(SecondSubCategory::class, 'category_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImageItem::class, 'product_id', 'id');
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class, 'origin_id', 'id');
    }

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'configuration_id', 'id');
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class, 'feature_id', 'id');
    }
}