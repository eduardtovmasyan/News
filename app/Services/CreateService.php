<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;

class CreateService
{
    protected  $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function create($request) 
    {
        $user = $this->userModel::create([
            'role' => $request->role,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'is_active' => User::TYPE_ACCESS_ACCEPTED,
            'password' => Hash::make($request->password),
        ]);

        return $user;
    }
}
