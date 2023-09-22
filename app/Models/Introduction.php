<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'created_date',
        'slug',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'introductions';
}