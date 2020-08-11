<?php

namespace App\Services;

use App\User;
use App\Contracts\UserInterface;
use Illuminate\Support\Facades\Hash;

class UserService implements UserInterface
{
    protected  $userModel;

    function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel::paginate($this->userModel::PER_PAGE);
    }

    public function store($request) 
    {
        $user = $this->userModel::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::TYPE_PANEL_ADMIN,
        ]);

        return $user;
    }

    public function show($user_id)
    {
        $user = $this->userModel::findOrFail($user_id);
    }

    public function update($request, $user_id)
    {
        $users = $this->userModel::findOrFail($user_id);

        $users->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]); 

        return $users;
    }

    public function destroy($user_id)
    {
        $this->userModel::whereId($user_id)
            ->delete();
    }
}