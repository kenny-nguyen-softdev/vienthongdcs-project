<?php

namespace App\Http\Services\BranchLocation;

use App\Models\BranchLocation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BranchLocationService
{
    function getAllBranchLocations()
    {
        $branchLocations = BranchLocation::all();

        return $branchLocations;
    }
}