<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Origin\OriginAddFormRequest;
use App\Http\Requests\Admin\Origin\OriginEditFormRequest;
use App\Http\Services\Origin\OriginService;
use App\Http\Services\Address\AddressService;
use App\Models\Origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    protected $originService;
    protected $addressService;

    public function __construct(OriginService $originService, AddressService $addressService)
    {
        $this->originService = $originService;
        $this->addressService = $addressService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $origins = $this->originService->getAllOrigins();

        return view('admin.origin.index', [
            'origins' => $origins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.origin.create', [
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OriginAddFormRequest $request)
    {
        $origin = $this->originService->save($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Origin $origin)
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.origin.edit', [
            'origin' => $origin,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OriginEditFormRequest $request, Origin $origin)
    {
        $result = $this->originService->update($request, $origin);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.origin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Origin $origin)
    {
        $result = $this->originService->deleteById($origin->id);

        return redirect()->back();
    }
}