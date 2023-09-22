<?php

namespace App\Http\Services\Page;

use App\Models\History;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PageService
{
    function getPageById($id)
    {
        $page = Page::where('id', $id)->first();

        return $page;
    }

    function getAllPages()
    {
        $pages = Page::all();

        return $pages;
    }

    function getPageBySlug($slug)
    {
        $page = Page::where('slug', $slug)->first();

        return $page;
    }

    function getPageByType($type)
    {
        $page = Page::where('type', $type)->get();

        return $page;
    }

    public function save($request)
    {
        try {
            $title = $request->input('title');
            $content = $request->input('content');
            $type = $request->input('type');
            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $page = Page::create([
                'title' => $title,
                'content' => $content,
                'type' => $type,
                'slug' => $slug,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới trang thông tin thành công');
            return $page;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới trang thông tin thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $page)
    {
        try {
            $title = $request->input('title');
            $content = $request->input('content');
            $type = $request->input('type');
            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $page->title = $title;
            $page->content = $content;
            $page->type = $type;
            $page->slug = $slug;
            $page->save();

            Session::flash('success', 'Cập nhật trang thông tin thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật trang thông tin thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($page_id)
    {
        try {
            Page::where('id', $page_id)->delete();

            Session::flash('success', 'Xóa trang thông tin thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa trang thông tin thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}