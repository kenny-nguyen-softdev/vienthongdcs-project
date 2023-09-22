<?php

namespace App\Http\Services\Consultant;

use App\Models\Consultant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str as SupportStr;

class ConsultantService
{
    public function getAllConsultants()
    {
        $consultants = Consultant::all();

        return $consultants;
    }

    public function getAllConsultantsOrderByCreatedDateDesc()
    {
        $consultants = Consultant::orderBy('created_date', 'desc')->get();

        return $consultants;
    }

    public function save($request)
    {
        try {
            $fullname = $request->input('fullname');
            $mobile = $request->input('mobile');
            $product_name = $request->input('product_name');
            $address = $request->input('address');

            $consultant = Consultant::create([
                'fullname' => $fullname,
                'mobile' => $mobile,
                'product_name' => $product_name,
                'address' => $address,
                'created_date' => Carbon::now()->format("Y-m-d H:i:s"),
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            return $consultant;
        } catch (\Exception $error) {
            return false;
        }
    }
}