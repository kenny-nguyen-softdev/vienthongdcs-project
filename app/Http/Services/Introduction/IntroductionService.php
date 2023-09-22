<?php

namespace App\Http\Services\Introduction;

use App\Models\Introduction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class IntroductionService
{
    function getAllIntroductions()
    {
        $introductions = Introduction::all();

        return $introductions;
    }

    function getIntroductionBySlug($slug)
    {
        $introduction = Introduction::where('slug', $slug)->first();

        return $introduction;
    }

    public function save($request)
    {
        try {
            $title = $request->input('title');
            $content = $request->input('content');
            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $currentDatetime = Carbon::now();

            $introduction = Introduction::create([
                'title' => $title,
                'content' => $content,
                'created_date' => $currentDatetime,
                'slug' => $slug,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới bài giới thiệu thành công');
            return $introduction;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới bài giới thiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $introduction)
    {
        try {
            $title = $request->input('title');
            $content = $request->input('content');
            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $introduction->title = $title;
            $introduction->content = $content;
            $introduction->slug = $slug;
            $introduction->save();

            Session::flash('success', 'Cập nhật bài giới thiệu thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật bài giới thiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($introduction_id)
    {
        try {
            Introduction::where('id', $introduction_id)->delete();

            Session::flash('success', 'Xóa bài giới thiệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài giới thiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}