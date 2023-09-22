<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
        'content',
        'author',
        'featured_image',
        'created_date',
        'slug',
        'blog_id',
        'parent_category_id',
        'title_seo',
        'meta_des',
        'meta_key',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'posts';

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(ParentCategory::class, 'parent_category_id', 'id');
    }
}