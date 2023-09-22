<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\SubMenu\SubMenuService;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    protected $subMenuService;

    public function __construct(SubMenuService $subMenuService)
    {
        $this->subMenuService = $subMenuService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subMenus = $this->subMenuService->getAllSubMenuList();

        return view('admin.subMenu.index', [
            'subMenus' => $subMenus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.subMenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subMenu = $this->subMenuService->save($request);

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
    public function edit(SubMenu $subMenu)
    {
        return view('admin.subMenu.edit', [
            'subMenu' => $subMenu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubMenu $subMenu)
    {
        $result = $this->subMenuService->update($request, $subMenu);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.subMenu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMenu $subMenu)
    {
        $result = $this->subMenuService->deleteById($subMenu->id);

        return redirect()->back();
    }
}