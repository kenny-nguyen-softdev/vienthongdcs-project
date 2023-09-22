<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kjmtrue\VietnamZone\Models\Ward;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tel',
        'hotline',
        'delivery_phone_number',
        'branch_location_id',
        'delivery_housenumber_street',
        'delivery_ward_id',
        'housenumber_street',
        'ward_id',
        'map',
        'map_url',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'branches';

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }

    public function deliveryWard()
    {
        return $this->belongsTo(Ward::class, 'delivery_ward_id', 'id');
    }

    public function branchLocation()
    {
        return $this->belongsTo(BranchLocation::class, 'branch_location_id', 'id');
    }
}