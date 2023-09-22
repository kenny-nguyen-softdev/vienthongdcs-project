<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategorySlider extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'url',
        'thumb',
        'sort_by',
        'active',
        'title',
        // 'sub_title',
        'description',
        'button_name',
        'parent_category_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'parent_category_sliders';

    public function parentCategory()
    {
        return $this->belongsTo(ParentCategory::class, 'parent_category_id', 'id');
    }
}