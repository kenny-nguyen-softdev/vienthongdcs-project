<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'origins';

    public function products()
    {
        return $this->hasMany(Product::class, 'origin_id', 'id');
    }
}