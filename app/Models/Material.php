<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'featured_image',
        'description',
        'color',
        'product_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'materials';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}