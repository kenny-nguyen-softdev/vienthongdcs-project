<?php

namespace App\Http\Services\HeaderPost;

use App\Models\HeaderPost;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HeaderPostService
{
    function getAllHeaderPosts()
    {
        $headerPosts = HeaderPost::all();

        return $headerPosts;
    }

    function getHeaderPostBySlug($slug)
    {
        $headerPost = HeaderPost::where('slug', $slug)->first();

        return $headerPost;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $icon_code = $request->input('icon_code');
            $sort_by = $request->input('sort_by');
            $content = $request->input('content');
            $is_active = $request->input('is_active');
            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            if (empty($is_active)) {
                $is_active = 0;
            }

            $currentDatetime = Carbon::now();

            $post = HeaderPost::create([
                'name' => $name,
                'icon_code' => $icon_code,
                'sort_by' => $sort_by,
                'content' => $content,
                'created_date' => $currentDatetime,
                'is_active' => $is_active,
                'slug' => $slug,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới bài viết trên Header thành công');
            return $post;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới bài viết trên Header thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $post)
    {
        try {
            $name = $request->input('name');
            $icon_code = $request->input('icon_code');
            $sort_by = $request->input('sort_by');
            $content = $request->input('content');
            $is_active = $request->input('is_active');
            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            if (empty($is_active)) {
                $is_active = 0;
            }

            $post->name = $name;
            $post->icon_code = $icon_code;
            $post->sort_by = $sort_by;
            $post->content = $content;
            $post->is_active = $is_active;
            $post->slug = $slug;
            $post->save();

            Session::flash('success', 'Cập nhật bài viết trên Header thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật bài viết trên Header thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($post_id)
    {
        try {
            HeaderPost::where('id', $post_id)->delete();

            Session::flash('success', 'Xóa bài viết trên Header thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài viết trên Header thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}