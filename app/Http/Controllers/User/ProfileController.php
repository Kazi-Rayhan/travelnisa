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
