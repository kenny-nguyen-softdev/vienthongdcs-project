<?php

namespace App\Http\Services\Slider;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SliderService
{
    function getAllSliders()
    {
        $sliders = Slider::all();

        return $sliders;
    }

    function getAllSliderOrderBySortByAsc()
    {
        $sliders = Slider::where('active', 1)->orderBy('sort_by', 'asc')->get();

        return $sliders;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $thumb = $request->input('thumb');
            $url = $request->input('url');
            $sort_by = $request->input('sort_by');
            $active = $request->input('active');

            if (!$active) {
                $active = 0;
            }

            $thumb = null;
            if ($request->hasfile('thumb')) {
                $file = $request->file('thumb');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/banners'), $name);

                $thumb = 'banners/' . $name;
            }

            $slider = Slider::create([
                'name' => $name,
                'thumb' => $thumb,
                'url' => $url,
                'sort_by' => $sort_by,
                'active' => $active,
            ]);

            Session::flash('success', 'Tạo mới slider thành công');
            return $slider;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới slider thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $slider)
    {
        try {
            $name = $request->input('name');
            $thumb = $request->input('thumb');
            $url = $request->input('url');
            $sort_by = $request->input('sort_by');
            $active = $request->input('active');

            if (!$active) {
                $active = 0;
            }

            if ($request->hasfile('thumb') || $thumb != $slider->thumb) {
                $file = $request->file('thumb');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                if ($name != $slider->thumb) {
                    $file->move(public_path('storage/uploads/banners'), $name);

                    $thumb = 'banners/' . $name;
                } else {
                    $thumb = $slider->thumb;
                }
            }

            $slider->name = $name;
            $slider->thumb = $thumb;
            $slider->url = $url;
            $slider->sort_by = $sort_by;
            $slider->active = $active;
            $slider->save();

            Session::flash('success', 'Cập nhật slider thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật slider thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($slider_id)
    {
        try {
            $slider = Slider::find($slider_id);
            Storage::delete("public/uploads/" . $slider->thumb);

            Slider::where('id', $slider_id)->delete();

            Session::flash('success', 'Xóa slider thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa slider thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}