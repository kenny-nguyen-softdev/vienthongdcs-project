<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'main_ingredient_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'components';

    public function mainIngredient()
    {
        return $this->belongsTo(MainIngredient::class, 'main_ingredient_id', 'id');
    }
}