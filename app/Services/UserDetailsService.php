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

        if (Hash::check($request->password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->newPassword),
            ]);

            return $user;
        } else {
            return response(['message' => 'Password is incorrect', 401]);
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

    public function block($user_id)
    {
        $user = $this->userModel::findOrFail($user_id);

        $user->update([
            'is_active' => $this->userModel::TYPE_ACCESS_DENIED,
        ]);

        return $user;
    }

    public function invited($user_id)
    {
        $user = $this->userModel::findOrFail($user_id);

        $user->update([
            'is_active' => $this->userModel::TYPE_ACCESS_ACCEPTED,
        ]);

        return $user;
    }

    public function admit($user_id)
    {
        $user = $this->userModel::findOrFail($user_id);

        $user->update([
            'is_active' => $this->userModel::TYPE_ACCESS_ACCEPTED,
        ]);

        return $user;
    }
}
