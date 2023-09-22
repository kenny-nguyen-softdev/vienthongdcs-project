<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Blog\BlogService;
use App\Http\Services\Post\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;
    protected $blogService;

    public function __construct(BlogService $blogService, PostService $postService)
    {
        $this->postService = $postService;
        $this->blogService = $blogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $blogSlug)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blogSlug, $postSlug)
    {
        $blog = $this->blogService->getBlogBySlug($blogSlug);

        if (empty($blog)) {
            return redirect()->route('site.home');
        }

        $post = $this->postService->getPostBySlug($postSlug);

        if (empty($post)) {
            return redirect()->route('site.home');
        }

        $limit = 8;
        $lastestPosts = $this->blogService->getLastestPostsByBlogListHavingLimit($limit, $blog);

        $limit = 6;
        $relatedPosts = $this->postService->getRelatedPostsByPostIdAndParentCategoryIdHavingLimit($limit, $post->blog->id, $post->parentCategory->id);

        return view('site.post.show', [
            'blog' => $blog,
            'post' => $post,
            'title' => $post->title,
            'lastestPosts' => $lastestPosts,
            'relatedPosts' => $relatedPosts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}