<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'icon_image',
        'description',
        'content',
        'sort_by',
        'slug',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'commitments';
}