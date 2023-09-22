<?php

namespace App\Http\Services\Branch;

use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BranchService
{
    function getAllBranches()
    {
        $branches = Branch::all();

        return $branches;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $ward_id = $request->input('ward');
            $housenumber_street = $request->input('housenumber_street');
            $delivery_ward_id = $request->input('delivery_ward');
            $delivery_housenumber_street = $request->input('delivery_housenumber_street');
            $tel = $request->input('tel');
            $hotline = $request->input('hotline');
            $delivery_phone_number = $request->input('delivery_phone_number');
            $branch_location_id = $request->input('branchLocation');
            $map = $request->input('map');
            $map_url = $request->input('map_url');

            $branch = Branch::create([
                'name' => $name,
                'ward_id' => $ward_id,
                'housenumber_street' => $housenumber_street,
                'delivery_housenumber_street' => $delivery_housenumber_street,
                'tel' => $tel,
                'hotline' => $hotline,
                'delivery_ward_id' => $delivery_ward_id,
                'delivery_phone_number' => $delivery_phone_number,
                'branch_location_id' => $branch_location_id,
                'map' => $map,
                'map_url' => $map_url,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới chi nhánh thành công');
            return $branch;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới chi nhánh thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $branch)
    {
        try {
            $name = $request->input('name');
            $ward_id = $request->input('ward');
            $housenumber_street = $request->input('housenumber_street');
            $delivery_ward_id = $request->input('delivery_ward');
            $delivery_housenumber_street = $request->input('delivery_housenumber_street');
            $tel = $request->input('tel');
            $hotline = $request->input('hotline');
            $delivery_phone_number = $request->input('delivery_phone_number');
            $branch_location_id = $request->input('branchLocation');
            $map = $request->input('map');
            $map_url = $request->input('map_url');

            $branch->name = $name;
            $branch->ward_id = $ward_id;
            $branch->housenumber_street = $housenumber_street;
            $branch->delivery_housenumber_street = $delivery_housenumber_street;
            $branch->delivery_ward_id = $delivery_ward_id;
            $branch->tel = $tel;
            $branch->hotline = $hotline;
            $branch->delivery_phone_number = $delivery_phone_number;
            $branch->branch_location_id = $branch_location_id;
            $branch->map = $map;
            $branch->map_url = $map_url;
            $branch->save();

            Session::flash('success', 'Cập nhật chi nhánh thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật chi nhánh thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($branch_id)
    {
        try {
            Branch::where('id', $branch_id)->delete();

            Session::flash('success', 'Xóa chi nhánh thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa chi nhánh thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}