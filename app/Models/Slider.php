<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'thumb',
        'sort_by',
        'active',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'sliders';
}