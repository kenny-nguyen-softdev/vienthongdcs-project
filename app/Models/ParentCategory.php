<?php

namespace App\Models;

use App\Models\ParentCategory as ModelsParentCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'icon_image',
        'sort_by',
        'is_active_home',
        'is_active',
        'slug',
        'title_seo',
        'meta_des',
        'meta_key',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'parent_categories';

    public function firstSubCategories()
    {
        return $this->hasMany(FirstSubCategory::class, 'parent_category_id', 'id');
    }

    public function secondSubCategories()
    {
        return $this->hasManyThrough(SecondSubCategory::class, FirstSubCategory::class, 'parent_category_id', 'first_sub_category_id');
    }

    public function parentCategorySliders()
    {
        return $this->hasMany(ParentCategorySlider::class, 'parent_category_id', 'id');
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'posts', 'parent_category_id', 'blog_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'parent_category_id', 'id');
    }

    public function origins()
    {
        return $this->belongsToMany(Origin::class, 'parent_category_origins', 'parent_category_id', 'origin_id');
    }

    public function configurations()
    {
        return $this->belongsToMany(Configuration::class, 'parent_category_configurations', 'parent_category_id', 'configuration_id');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'parent_category_features', 'parent_category_id', 'feature_id');
    }
}