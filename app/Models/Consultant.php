<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'fullname',
        'mobile',
        'address',
        'product_name',
        'created_date',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'consultants';
}