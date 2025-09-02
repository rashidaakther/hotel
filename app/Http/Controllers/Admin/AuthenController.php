<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email:users',
            'password' => 'required|min:6|max:12'
        ]);
        if (
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
                'is_active' => 1
            ], ($request->remember) ? true : false)
        ) {
            return redirect('dashboard');
        } else {
            return back()->with('fail', 'Invalid email or password!');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
