<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeaderPost\HeaderPostAddFormRequest;
use App\Http\Requests\Admin\HeaderPost\HeaderPostEditFormRequest;
use App\Http\Services\HeaderPost\HeaderPostService;
use App\Models\HeaderPost;
use Illuminate\Http\Request;

class HeaderPostController extends Controller
{
    protected $headerPostService;
    public function __construct(HeaderPostService $headerPostService)
    {
        $this->headerPostService = $headerPostService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headerPosts = $this->headerPostService->getAllHeaderPosts();

        return view('admin.headerPost.index', [
            'headerPosts' => $headerPosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.headerPost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeaderPostAddFormRequest $request)
    {
        $headerPost = $this->headerPostService->save($request);

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
    public function edit(HeaderPost $headerPost)
    {
        return view('admin.headerPost.edit', [
            'headerPost' => $headerPost
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HeaderPostEditFormRequest $request, HeaderPost $headerPost)
    {
        $headerPost = $this->headerPostService->update($request, $headerPost);

        if (!$headerPost) {
            return redirect()->back();
        }

        return redirect()->route('admin.headerPost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeaderPost $headerPost)
    {
        $result = $this->headerPostService->deleteById($headerPost->id);

        return redirect()->back();
    }

    public function description(HeaderPost $headerPost)
    {
        return view('admin.headerPost.description', [
            'headerPost' => $headerPost
        ]);
    }
}