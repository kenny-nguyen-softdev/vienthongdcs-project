<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'url',
        'thumb',
        'sort_by',
        'active',
        'title',
        'sub_title',
        'description',
        'button_name',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'banners';
}