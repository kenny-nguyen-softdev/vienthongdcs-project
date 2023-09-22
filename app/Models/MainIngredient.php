<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainIngredient extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'featured_image',
        'description',
        'color',
        'sort_by',
        'active',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'main_ingredients';

    public function components()
    {
        return $this->hasMany(Component::class, 'main_ingredient_id', 'id');
    }
}