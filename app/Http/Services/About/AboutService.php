<?php

namespace App\Http\Services\About;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutService
{
    function getAllAboutList() {
        $abouts = About::all();

        return $abouts;
    }

    function getAllAbouts()
    {
        $abouts = About::where('active', 1)->orderBy('sort_by', 'asc')->get();

        return $abouts;
    }

    function getAboutListOrderById()
    {
        $abouts = About::orderBy('id', 'desc')->get();

        return $abouts;
    }

    function getOneFeaturedAbout()
    {
        $about = About::where('featured', 1)->first();

        return $about;
    }

    function getAboutBySlug($slug)
    {
        $about = About::where('slug', $slug)->first();

        return $about;
    }


    // function getAboutListOrderByCreatedDateDescHavingLimit($limit, $orderBy)
    // {
    //     $blogs = About::orderBy($orderBy, 'desc')->limit($limit)->get();

    //     return $blogs;
    // }

    // function getAboutListHavingPagination($page, $item_per_page)
    // {
    //     $this->item_per_page = $item_per_page;

    //     $blogs = About::when($page, function ($query) use ($page) {
    //         $query->offset($page * $this->item_per_page);
    //     })
    //         ->orderBy('created_date', 'desc')
    //         ->limit($this->item_per_page)
    //         ->get(); //nối URL parameters

    //     return $blogs;
    // }

    // function getLastestAboutListHavingLimit($limit)
    // {
    //     $blogs = About::orderBy('created_date', 'desc')->limit($limit)->get();

    //     return $blogs;
    // }

    // function getAboutBySlug($slug)
    // {
    //     $blog = About::where('slug', $slug)->first();

    //     return $blog;
    // }

    function getAboutListBySlug($slug)
    {
        $blog = About::where('slug', $slug)->get();

        return $blog;
    }

    public function save($request)
    {
        try {
            $title = $request->input('title');
            $description = $request->input('description');
            $description_1 = $request->input('description_1');
            $description_2 = $request->input('description_2');
            $description_3 = $request->input('description_3');
            $description_4 = $request->input('description_4');
            $description_5 = $request->input('description_5');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');
            $featured = $request->input('featured');
            $slug = $request->input('slug');

            if(!$featured) {
                $featured = 0;
            }

            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            $featured_image = null;
            if ($request->hasfile('featured_image')) {
                $file = $request->file('featured_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $featured_image = 'abouts/' . $name;
            }

            $banner_1 = null;
            if ($request->hasfile('banner_1')) {
                $file = $request->file('banner_1');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_1 = 'abouts/' . $name;
            }

            $banner_2 = null;
            if ($request->hasfile('banner_2')) {
                $file = $request->file('banner_2');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_2 = 'abouts/' . $name;
            }

            $banner_3 = null;
            if ($request->hasfile('banner_3')) {
                $file = $request->file('banner_3');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_3 = 'abouts/' . $name;
            }

            $banner_4 = null;
            if ($request->hasfile('banner_4')) {
                $file = $request->file('banner_4');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_4 = 'abouts/' . $name;
            }

            $banner_5 = null;
            if ($request->hasfile('banner_5')) {
                $file = $request->file('banner_5');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_5 = 'abouts/' . $name;
            }

            $banner_6 = null;
            if ($request->hasfile('banner_6')) {
                $file = $request->file('banner_6');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_6 = 'abouts/' . $name;
            }

            $banner_7 = null;
            if ($request->hasfile('banner_7')) {
                $file = $request->file('banner_7');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_7 = 'abouts/' . $name;
            }

            $about = About::create([
                'title' => $title,
                'description' => $description != null ? $description : '',
                'description_1' => $description_1 != null ? $description_1 : '',
                'description_2' => $description_2 != null ? $description_2 : '',
                'description_3' => $description_3 != null ? $description_3 : '',
                'description_4' => $description_4 != null ? $description_4 : '',
                'description_5' => $description_5 != null ? $description_5 : '',
                'banner_1' => $banner_1,
                'banner_2' => $banner_2,
                'banner_3' => $banner_3,
                'banner_4' => $banner_4,
                'banner_5' => $banner_5,
                'banner_6' => $banner_6,
                'banner_7' => $banner_7,
                'featured_image' => $featured_image,
                'slug' => $slug,
                'featured' => $featured,
                'title_seo' => $title_seo,
                'meta_des' => $meta_des,
                'meta_key' => $meta_key,
                'created_date' => Carbon::now(),
            ]);

            Session::flash('success', 'Tạo mới bài viết của chúng tôi thành công');
            return $about;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới bài viết của chúng tôi thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $about)
    {
        try {
            $title = $request->input('title');
            $featured_image = $request->input('featured_image');
            $description = $request->input('description');
            $description_1 = $request->input('description_1');
            $description_2 = $request->input('description_2');
            $description_3 = $request->input('description_3');
            $description_4 = $request->input('description_4');
            $description_5 = $request->input('description_5');
            $banner_1 = $request->input('banner_1');
            $banner_2 = $request->input('banner_2');
            $banner_3 = $request->input('banner_3');
            $banner_4 = $request->input('banner_4');
            $banner_5 = $request->input('banner_5');
            $banner_6 = $request->input('banner_6');
            $banner_7 = $request->input('banner_7');
            $title_seo = $request->input('title_seo');
            $meta_des = $request->input('meta_des');
            $meta_key = $request->input('meta_key');
            $featured = $request->input('featured');
            $slug = $request->input('slug');

            if(!$featured) {
                $featured = 0;
            }

            $slugString = $title;
            $slug = Str::slug($slugString, '-');

            if ($request->hasfile('featured_image') || $featured_image != $about->featured_image) {
                $file = $request->file('featured_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                if ($name != $about->featured_image) {
                    $file->move(public_path('storage/uploads/abouts'), $name);

                    $featured_image = 'abouts/' . $name;
                } else {
                    $featured_image = $about->featured_image;
                }
            }

            if ($request->hasfile('banner_1') || $banner_1 != $about->banner_1) {
                $file = $request->file('banner_1');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_1 = 'abouts/' . $name;
            }

            if ($request->hasfile('banner_2') || $banner_2 != $about->banner_2) {
                $file = $request->file('banner_2');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_2 = 'abouts/' . $name;
            }

            if ($request->hasfile('banner_3') || $banner_3 != $about->banner_3) {
                $file = $request->file('banner_3');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_3 = 'abouts/' . $name;
            }

            if ($request->hasfile('banner_4') || $banner_4 != $about->banner_4) {
                $file = $request->file('banner_4');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_4 = 'abouts/' . $name;
            }

            if ($request->hasfile('banner_5') || $banner_5 != $about->banner_5) {
                $file = $request->file('banner_5');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_5 = 'abouts/' . $name;
            }

            if ($request->hasfile('banner_6') || $banner_6 != $about->banner_6) {
                $file = $request->file('banner_6');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_6 = 'abouts/' . $name;
            }

            if ($request->hasfile('banner_7') || $banner_7 != $about->banner_7) {
                $file = $request->file('banner_7');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/abouts'), $name);

                $banner_7 = 'abouts/' . $name;
            }

            $about->title = $title;
            $about->featured_image = $featured_image;
            $about->description = $description != null ? $description : '';
            $about->description_1 = $description_1 != null ? $description_1 : '';
            $about->description_2 = $description_2 != null ? $description_2 : '';
            $about->description_3 = $description_3 != null ? $description_3 : '';
            $about->description_4 = $description_4 != null ? $description_4 : '';
            $about->description_5 = $description_5 != null ? $description_5 : '';
            $about->banner_1 = $banner_1;
            $about->banner_2 = $banner_2;
            $about->banner_3 = $banner_3;
            $about->banner_4 = $banner_4;
            $about->banner_5 = $banner_5;
            $about->banner_6 = $banner_6;
            $about->banner_7 = $banner_7;
            $about->title_seo = $title_seo;
            $about->meta_des = $meta_des;
            $about->meta_key = $meta_key;
            $about->featured = $featured;
            $about->slug = $slug;
            $about->save();

            Session::flash('success', 'Cập nhật bài viết của chúng tôi thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật bài viết của chúng tôi thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($about_id)
    {
        try {
            $about = About::find($about_id);
            Storage::delete("public/uploads/" . $about->featured_image);
            Storage::delete("public/uploads/" . $about->banner_1);
            Storage::delete("public/uploads/" . $about->banner_2);
            Storage::delete("public/uploads/" . $about->banner_3);
            Storage::delete("public/uploads/" . $about->banner_4);
            Storage::delete("public/uploads/" . $about->banner_5);
            Storage::delete("public/uploads/" . $about->banner_6);
            Storage::delete("public/uploads/" . $about->banner_7);

            About::where('id', $about_id)->delete();

            Session::flash('success', 'Xóa bài bài viết của chúng tôi thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài bài viết của chúng tôi thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
