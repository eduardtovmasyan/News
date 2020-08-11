<?php

namespace App\Http\Controllers;

use UserCrud;
use App\Http\Requests\UserValidateRequest;

class RegisterController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }

    public function signUp(UserValidateRequest $request)
    {   
    	UserCrud::store($request);

        session()->flash('message', 'Your account is created');
       
        return redirect()->route('login');
    }
}
