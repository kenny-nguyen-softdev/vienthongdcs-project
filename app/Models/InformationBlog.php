<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'is_active_home',
        'is_active',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'information_blogs';

    public function informationPosts()
    {
        return $this->hasMany(InformationPost::class, 'branch_location_id', 'id');
    }
}