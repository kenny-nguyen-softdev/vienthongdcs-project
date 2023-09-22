<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'blogs';

    public function posts()
    {
        return $this->hasMany(Post::class, 'blog_id', 'id')->orderByDesc('created_date');
    }
}