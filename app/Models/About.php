<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
        'description_1',
        'description_2',
        'description_3',
        'description_4',
        'description_5',
        'banner_1',
        'banner_2',
        'banner_3',
        'banner_4',
        'banner_5',
        'banner_6',
        'banner_7',
        'featured_image',
        'featured',
        'slug',
        'title_seo',
        'meta_des',
        'meta_key',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'abouts';
}