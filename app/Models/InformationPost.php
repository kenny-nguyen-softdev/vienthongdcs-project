<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'created_date',
        'content',
        'information_blog_id',
        'is_active',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'information_posts';

    public function informationBlog()
    {
        return $this->belongsTo(InformationPost::class, 'information_blog_id', 'id');
    }
}