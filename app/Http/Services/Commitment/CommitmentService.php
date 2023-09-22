<?php

namespace App\Http\Services\Commitment;

use App\Models\Commitment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CommitmentService
{
    function getAllCommitmentList()
    {
        $commitments = Commitment::all();

        return $commitments;
    }

    function getAllCommitments()
    {
        $commitments = Commitment::where('active', 1)->orderBy('sort_by', 'asc')->get();

        return $commitments;
    }

    function getCommimentListOrderByCreatedDateDesc()
    {
        $commitments = Commitment::orderBy("sort_by", 'asc')->get();

        return $commitments;
    }

    function getCommitmentBySlug($slug)
    {
        $commitment = Commitment::where('slug', $slug)->first();

        return $commitment;
    }

    // function getCommitmentListOrderByCreatedDateDescHavingLimit($limit, $orderBy)
    // {
    //     $commitments = Commitment::orderBy($orderBy, 'desc')->limit($limit)->get();

    //     return $commitments;
    // }

    // function getCommitmentListHavingPagination($commitment, $item_per_commitment)
    // {
    //     $this->item_per_commitment = $item_per_commitment;

    //     $commitments = Commitment::when($commitment, function ($query) use ($commitment) {
    //         $query->offset($commitment * $this->item_per_commitment);
    //     })
    //         ->orderBy('created_date', 'desc')
    //         ->limit($this->item_per_commitment)
    //         ->get(); //nối URL parameters

    //     return $commitments;
    // }

    // function getLastestCommitmentListHavingLimit($limit)
    // {
    //     $commitments = Commitment::orderBy('created_date', 'desc')->limit($limit)->get();

    //     return $commitments;
    // }

    // function getCommitmentBySlug($slug)
    // {
    //     $commitment = Commitment::where('slug', $slug)->first();

    //     return $commitment;
    // }

    function getCommitmentListBySlug($slug)
    {
        $commitment = Commitment::where('slug', $slug)->get();

        return $commitment;
    }

    public function save($request)
    {
        try {
            $commitment_name = $request->input('name');
            $description = $request->input('description');
            $content = $request->input('content');
            $sort_by = $request->input('sort_by');

            $slugString = $commitment_name;
            $slug = Str::slug($slugString, '-');

            $commitmentList = $this->getCommitmentListBySlug($slug);

            if (count($commitmentList) > 0) {
                $count = 1;
                foreach ($commitmentList as $commitment) {
                    $count++;
                }
                $slugString = $commitment_name . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }


            $icon_image = null;
            if ($request->hasfile('icon_image')) {
                $file = $request->file('icon_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/commitments'), $name);

                $icon_image = 'commitments/' . $name;
            }

            $commitment = Commitment::create([
                'name' => $commitment_name,
                'icon_image' => $icon_image,
                'description' => $description,
                'content' => $content,
                'sort_by' => $sort_by,
                'created_date' => Carbon::now(),
                'slug' => $slug,
            ]);

            Session::flash('success', 'Tạo mới cam kết thành công');
            return $commitment;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới cam kết thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $commitment)
    {
        try {
            $commitment_name = $request->input('name');
            $icon_image = $request->input('icon_image');
            $description = $request->input('description');
            $content = $request->input('content');
            $sort_by = $request->input('sort_by');

            $slugString = $commitment_name;
            $slug = Str::slug($slugString, '-');

            $commitmentList = $this->getCommitmentListBySlug($slug);

            if (count($commitmentList) > 0) {
                $count = 1;
                foreach ($commitmentList as $commitment) {
                    $count++;
                }
                $slugString = $commitment_name . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }

            if ($request->hasfile('icon_image') || $icon_image != $commitment->icon_image) {
                $file = $request->file('icon_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                if ($name != $commitment->icon_image) {
                    $file->move(public_path('storage/uploads/commitments'), $name);

                    $icon_image = 'commitments/' . $name;
                } else {
                    $icon_image = $commitment->icon_image;
                }
            }

            $commitment->name = $commitment_name;
            $commitment->icon_image = $icon_image;
            $commitment->content = $content;
            $commitment->description = $description;
            $commitment->sort_by = $sort_by;
            $commitment->slug = $slug;
            $commitment->save();

            Session::flash('success', 'Cập nhật cam kết thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật cam kết thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($commitment_id)
    {
        try {
            $commitment = Commitment::find($commitment_id);
            Storage::delete("public/uploads/" . $commitment->icon_image);

            Commitment::where('id', $commitment_id)->delete();

            Session::flash('success', 'Xóa bài cam kết thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bài cam kết thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}