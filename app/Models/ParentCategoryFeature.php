<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategoryFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_category_id',
        'feature_id',
        'created_at',
        'updated_at'
    ];
    // protected $primaryKey = ['order_id', 'product_id'];
    protected $table = 'parent_category_features';
}