<?php

namespace App\Services;

use App\User;
use App\Contracts\UserInterface;
use Illuminate\Support\Facades\Hash;

class UserService implements UserInterface
{
    protected  $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function index()
    {
        return $this->userModel::paginate($this->userModel::PER_PAGE);
    }

    public function store($request) 
    {
        $user = $this->userModel::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $user;
    }
    
    public function createAdmin($request) 
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

    public function show($user_id)
    {
        return $this->userModel::findOrFail($user_id);
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
