<?php

namespace App\Services;

use App\User;
use App\Contracts\UserInterface;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    protected  $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function logIn($request)
    {
        $credentials = $request->except(['_token']);

        $user = User::where('email', $request->email)->first();

        if (!isset($user) || $user->is_active !== User::TYPE_ACCESS_ACCEPTED) {
            return false;
        }

        if (auth()->attempt($credentials)) {
            return true;
        }

        return false;
    }
}
