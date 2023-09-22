<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\PostAddFormRequest;
use App\Http\Requests\Admin\Post\PostEditFormRequest;
use App\Http\Services\Blog\BlogService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\Post\PostService;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;
    protected $blogService;
    protected $parentCategoryService;

    public function __construct(PostService $postService, BlogService $blogService, ParentCategoryService $parentCategoryService)
    {
        $this->postService = $postService;
        $this->blogService = $blogService;
        $this->parentCategoryService = $parentCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postService->getAllPosts();

        return view('admin.post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = $this->blogService->getAllBlogs();
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.post.create', [
            'blogs' => $blogs,
            'parentCategories' => $parentCategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostAddFormRequest $request)
    {
        $post = $this->postService->save($request);

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
    public function edit(Post $post)
    {
        $blogs = $this->blogService->getAllBlogs();
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.post.edit', [
            'post' => $post,
            'blogs' => $blogs,
            'parentCategories' => $parentCategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostEditFormRequest $request, Post $post)
    {
        $result = $this->postService->update($request, $post);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $result = $this->postService->deleteById($post->id);

        return redirect()->back();
    }
}