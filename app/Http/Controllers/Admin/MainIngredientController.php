<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\MainIngredient\MainIngredientService;
use App\Models\MainIngredient;

class MainIngredientController extends Controller
{
    protected $mainIngredientService;
    public function __construct(MainIngredientService $mainIngredientService)
    {
        $this->mainIngredientService = $mainIngredientService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainIngredients = $this->mainIngredientService->getAllMainIngredientList();

        return view('admin.mainIngredient.index', [
            'mainIngredients' => $mainIngredients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mainIngredient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mainIngredient = $this->mainIngredientService->save($request);

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
    public function edit(MainIngredient $mainIngredient)
    {
        return view('admin.mainIngredient.edit', [
            'mainIngredient' => $mainIngredient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainIngredient $mainIngredient)
    {
        $result = $this->mainIngredientService->update($request, $mainIngredient);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.mainIngredient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainIngredient $mainIngredient)
    {
        $result = $this->mainIngredientService->deleteById($mainIngredient->id);

        return redirect()->back();
    }
}