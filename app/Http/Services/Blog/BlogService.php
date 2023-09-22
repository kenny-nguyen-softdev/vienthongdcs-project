<?php

namespace App\Http\Services\Blog;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogService
{
    protected $item_per_page;

    function getAllBlogs()
    {
        $blogs = Blog::all();

        return $blogs;
    }

    function getBlogBySlug($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        return $blog;
    }

    function getPostsListByBlogHavingPagination($page, $item_per_page, $blog)
    {
        $this->item_per_page = $item_per_page;

        $blogs = $blog->posts()->when($page, function ($query) use ($page) {
            $query->offset($page * $this->item_per_page);
        })
            ->orderBy('created_date', 'desc')
            ->limit($this->item_per_page)
            ->get(); //nối URL parameters

        return $blogs;
    }

    function getLastestPostsByBlogListHavingLimit($limit, $blog)
    {
        $posts = $blog->posts()->orderBy('created_date', 'desc')->limit($limit)->get();

        return $posts;
    }


    public function save($request)
    {
        try {
            $name = $request->input('name');
            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $blog = Blog::create([
                'name' => $name,
                'slug' => $slug,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới danh mục bài viết thành công');
            return $blog;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới danh mục bài viết thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $blog)
    {
        try {
            $name = $request->input('name');
            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $blog->name = $name;
            $blog->slug = $slug;
            $blog->save();

            Session::flash('success', 'Cập nhật danh mục bài viết thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật danh mục bài viết thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($blog_id)
    {
        try {
            $blog = Blog::find($blog_id);
            if (count($blog->posts) > 0) {
                Session::flash('error', 'Danh mục bài viết đã có các bài viết. Vui lòng xóa các bài viết trước !');
                return false;
            }

            Blog::where('id', $blog_id)->delete();

            Session::flash('success', 'Xóa danh mục bài viết thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa danh mục bài viết thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}