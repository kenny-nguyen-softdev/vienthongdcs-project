<?php

namespace App\Http\Services\Post;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostService
{
    function getAllPosts()
    {
        $posts = Post::all();

        return $posts;
    }

    function getPostBySlug($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return $post;
    }

    function getRelatedPostsByPostIdAndParentCategoryIdHavingLimit($limit, $blog_id, $parent_category_id)
    {
        $relatedPosts = Post::where('blog_id', $blog_id)->where('parent_category_id', $parent_category_id)->orderBy("created_date", 'desc')->limit($limit)->get();

        return $relatedPosts;
    }

    public function save($request)
    {
        try {
            $title = $request->input('title');
            $description = $request->input('description');
            $author = $request->input('author');
            $content = $request->input('content');
            $featured_image = $request->input('featured_image');
            $blog_id = $request->input('blog');
            $parent_category_id = $request->input('parentCategory');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');
            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $currentDatetime = Carbon::now();

            $post = Post::create([
                'title' => $title,
                'author' => $author,
                'description' => $description,
                'content' => $content,
                'featured_image' => $featured_image,
                'blog_id' => $blog_id,
                'parent_category_id' => $parent_category_id,
                'created_date' => $currentDatetime,
                'title_seo' => $title_seo,
                'meta_des' => $meta_des,
                'meta_key' => $meta_key,
                'slug' => $slug,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới bài viết thành công');
            return $post;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới bài viết thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $post)
    {
        try {
            $title = $request->input('title');
            $description = $request->input('description');
            $author = $request->input('author');
            $content = $request->input('content');
            $featured_image = $request->input('featured_image');
            $blog_id = $request->input('blog');
            $parent_category_id = $request->input('parentCategory');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');
            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $post->title = $title;
            $post->description = $description;
            $post->author = $author;
            $post->content = $content;
            $post->featured_image = $featured_image;
            $post->blog_id = $blog_id;
            $post->parent_category_id = $parent_category_id;
            $post->title_seo = $title_seo;
            $post->meta_des = $meta_des;
            $post->meta_key = $meta_key;
            $post->slug = $slug;
            $post->save();

            Session::flash('success', 'Cập nhật bài viết thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật bài viết thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($post_id)
    {
        try {
            Post::where('id', $post_id)->delete();

            Session::flash('success', 'Xóa bài viết thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài viết thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}