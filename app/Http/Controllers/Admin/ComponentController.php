<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\Component\ComponentAddFormRequest;
// use App\Http\Requests\Admin\Component\ComponentEditFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Component\ComponentService;
use App\Http\Services\MainIngredient\MainIngredientService;
use App\Models\Component;

class ComponentController extends Controller
{
    protected $componentService;
    protected $mainIngredientService;

    public function __construct(ComponentService $componentService, MainIngredientService $mainIngredientService)
    {
        $this->componentService = $componentService;
        $this->mainIngredientService = $mainIngredientService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = $this->componentService->getAllComponents();

        return view('admin.component.index', [
            'components' => $components
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainIngredients = $this->mainIngredientService->getAllMainIngredients();

        return view('admin.component.create', [
            'mainIngredients' => $mainIngredients,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $component = $this->componentService->save($request);

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
    public function edit(Component $component)
    {
        $mainIngredients = $this->mainIngredientService->getAllMainIngredients();

        return view('admin.component.edit', [
            'component' => $component,
            'mainIngredients' => $mainIngredients,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Component $component)
    {
        $result = $this->componentService->update($request, $component);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.component.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component)
    {
        $result = $this->componentService->deleteById($component->id);

        return redirect()->back();
    }
}