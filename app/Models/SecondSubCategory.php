<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondSubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'first_sub_category_id',
        'is_active',
        'title_seo',
        'meta_des',
        'meta_key',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'second_sub_categories';

    public function firstSubCategory()
    {
        return $this->belongsTo(FirstSubCategory::class, 'first_sub_category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}