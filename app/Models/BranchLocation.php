<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'province_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'branch_locations';

    public function branches()
    {
        return $this->hasMany(Branch::class, 'branch_location_id', 'id');
    }
}