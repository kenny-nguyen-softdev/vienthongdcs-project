<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstSubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'parent_category_id',
        'is_active',
        'title_seo',
        'meta_des',
        'meta_key',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'first_sub_categories';

    public function secondSubCategories()
    {
        return $this->hasMany(SecondSubCategory::class, 'first_sub_category_id', 'id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(ParentCategory::class, 'parent_category_id', 'id');
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, SecondSubCategory::class, 'first_sub_category_id', 'category_id');
    }
}