<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'created_date',
        'content',
        'sort_by',
        'icon_code',
        'is_active',
        'slug',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'header_posts';
}