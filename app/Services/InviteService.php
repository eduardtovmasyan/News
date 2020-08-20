<?php

namespace App\Services;

use App\User;
use App\Mail\Invitation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class InviteService
{
    protected $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * @param $data
     */
    public function send($data)
    {
        $password = Str::random(10);

        $user = $this->userModel::create([
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => Hash::make($password),
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'is_active' => User::TYPE_ACCESS_INVITED,
        ]);

        $user = $user->toArray();
        $user['password'] = $password;

        Mail::to($data['email'])
            ->queue(new Invitation($user));
    }
}
