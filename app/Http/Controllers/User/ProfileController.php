<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profilePage()
    {
        return view('profile');
    }

    public function profilePageSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'preference' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:jpeg,png,jpg,gif|max:4096',
            ], [
                'image.mimes' => 'Please upload a valid image file (jpeg, png, jpg, gif).',
                'image.max' => 'Image size cannot exceed 4MB.',
            ]);
        }
        $user = User::findOrFail(Auth::user()->id);

        if ($request->hasFile('image')) {
            if ($user->image != 'default.jpg') {
                $old_photo_location = public_path('uploads/user/' . $user->image);
                if (file_exists($old_photo_location)) {
                    unlink($old_photo_location);
                }
            }

            $new_photo_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/user'), $new_photo_name);
            $user->image = $new_photo_name;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->preference = $request->preference;
        $user->save();
        return back()->with('success', 'Profile Updated Successfully.');
    }

    public function changePassword()
    {
        return view('change_password');
    }

    public function changePasswordSubmit(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|same:retype_password|string|min:8',
        ]);
        $user = User::findOrFail(Auth::user()->id);
        $check_old_password = Hash::check($request->current_password, $user->password);
        if ($check_old_password) {
            $user->password = Hash::make($request->new_password);
            $user->save();
        } else {
            return back()->with('error', 'Wrong password');
        }
        return back()->with('success', 'Password changed successfully');
    }
}
