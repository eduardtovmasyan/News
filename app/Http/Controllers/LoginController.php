<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function logIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email', $request->email)->first();

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        } else {
            session()->flash('message', 'Invalid credentials');

            return redirect()->back();
        }
    }

    public function logOut(Request $request)
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}
