<?php

namespace App\Http\Controllers;

use UserCrud;
use Notification;
use App\Http\Requests\UserValidateRequest;

class RegisterController extends Controller
{
    public function showSignupForm()
    {
        return view('register');
    }

    public function signUp(UserValidateRequest $request)
    {   
        UserCrud::store($request);
        $info = $request->toArray();
        Notification::send($info);

        return redirect()->route('login');
    }
}
