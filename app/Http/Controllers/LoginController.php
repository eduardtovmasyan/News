<?php

namespace App\Http\Controllers;

use Enter;
use Illuminate\Http\Request;
use App\Http\Requests\LoginValidateRequest;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function logIn(LoginValidateRequest $request)
    {

        $enter = Enter::logIn($request);

        if ($enter) {
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
