<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserDetailsService
{
    protected  $userModel;

    function __construct()
    {
        $this->userModel = new User();
    }

    public function personal($request)
    {   
        $user = $this->userModel::findOrFail(Auth::id());

        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email
        ]); 

        return $user;
    }

    public function password($request)
    {   
        $user = $this->userModel::findOrFail(Auth::id());

        if (Hash::check($user->password) === $request->password) {
            $user->update([
                'password' => $request->newPassword,
            ]); 

            return $user;
        } else {
            return reponse(['message' =>'Password is incorrect', 401]);
        }
    }

    public function access($request, $user_id)
    {   
        $user = $this->userModel::findOrFail($user_id);

        $user->update([
            'is_active' => $request->is_active
        ]); 

        return $user;
    }

}
