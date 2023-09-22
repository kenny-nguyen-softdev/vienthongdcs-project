<?php

namespace App\Http\Services\Member;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MemberService
{
    public function getAllMember()
    {
        $members = User::all();

        return $members;
    }

    function getMemberByEmail($email)
    {
        $member = User::where('email', $email)->first();

        return $member;
    }

    function updateMemberByEmail($request)
    {
        try {
            $fullname = $request->input('fullname');
            $username = $request->input('username');
            $email = $request->input('email');
            $mobile = $request->input('mobile');
            $private_image = $request->input('private_image');
            $cover_image = $request->input('cover_image');
            $member = $this->getMemberByEmail($email);

            $password = $member->password;
            $passwordInput = $request->input('password');
            if ($passwordInput == $password) {
                $password = $passwordInput;
            } else {
                $password = Hash::make($passwordInput);
            }

            if ($request->hasfile('private_image') || $private_image != $member->private_image) {
                $file = $request->file('private_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/users'), $name);

                $private_image = 'users/' . $name;
            }

            if ($request->hasfile('cover_image') || $cover_image != $member->cover_image) {
                $file = $request->file('cover_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/users'), $name);

                $cover_image = 'users/' . $name;
            }

            $member->name = $fullname;
            $member->username = $username;
            $member->password = $password;
            $member->email = $email;
            $member->mobile = $mobile;
            $member->private_image = $private_image;
            $member->cover_image = $cover_image;
            $member->updated_at = Carbon::now()->format("Y-m-d H:i:s");
            $member->save();

            Session::flash('success', 'Cập nhật thông tin cá nhân thành công');
            return $member;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thông tin cá nhân thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function createNewMember($request)
    {
        try {
            $fullname = $request->input('name');
            $username = $request->input('username');
            $password = $request->input('password');
            $email = $request->input('email');
            $mobile = $request->input('mobile');

            $is_active = 0;
            if ($request->input('is_active')) {
                $is_active = $request->input('is_active');
            }

            $private_image = null;
            if ($request->hasfile('private_image')) {
                $file = $request->file('private_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/users'), $name);

                $private_image = 'users/' . $name;
            }

            $cover_image = null;
            if ($request->hasfile('cover_image')) {
                $file = $request->file('cover_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/users'), $name);

                $cover_image = 'users/' . $name;
            }

            $member = User::create([
                'name' => $fullname,
                'username' => $username,
                'password' => Hash::make($password),
                'email' => $email,
                'mobile' => $mobile,
                'private_image' => $private_image,
                'cover_image' => $cover_image,
                'is_active' => $is_active,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới thành viên thành công');
            return $member;
        } catch (\Exception $error) {
            Session::flash('error', 'Thêm mới thành viên thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function updateMember($request, $member)
    {
        try {
            $fullname = $request->input('name');
            $username = $request->input('username');

            $password = $member->password;
            $passwordInput = $request->input('password');

            if ($passwordInput == $password) {
                $password = $passwordInput;
            } else {
                $password = Hash::make($passwordInput);
            }

            $email = $request->input('email');
            $mobile = $request->input('mobile');
            $private_image = $request->input('private_image');
            $cover_image = $request->input('cover_image');

            $is_active = 0;
            if ($request->input('is_active')) {
                $is_active = $request->input('is_active');
            }

            if ($request->hasfile('private_image') || $private_image != $member->private_image) {
                $file = $request->file('private_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/users'), $name);

                $private_image = 'users/' . $name;
            }

            if ($request->hasfile('cover_image') || $cover_image != $member->cover_image) {
                $file = $request->file('cover_image');

                $name = Str::slug(now()->format('Y-m-d H:i:s'), '-') . '-' . Carbon::now()->format('s') . "_" . $file->getClientOriginalName();

                $file->move(public_path('storage/uploads/users'), $name);

                $cover_image = 'users/' . $name;
            }

            $member->name = $fullname;
            $member->username = $username;
            $member->password = $password;
            $member->email = $email;
            $member->mobile = $mobile;
            $member->private_image = $private_image;
            $member->cover_image = $cover_image;
            $member->is_active = $is_active;
            $member->updated_at = Carbon::now()->format("Y-m-d H:i:s");
            $member->save();

            Session::flash('success', 'Cập nhật thành viên thành công');
            return $member;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thành viên thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($member_id)
    {
        try {
            $member = User::find($member_id);

            User::where('id', $member_id)->delete();
            Storage::delete("public/uploads/" . $member->private_image);
            Storage::delete("public/uploads/" . $member->cover_image);

            Session::flash('success', 'Xóa thành viên thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa thành viên thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}