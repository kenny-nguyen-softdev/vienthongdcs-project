<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'sort_by',
        'icon_code',
        'active',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'sub_menus';
}