<?php

namespace App\Services;

use App\User;
use App\Contracts\SuperAdminInterface;

class SuperAdminService implements SuperAdminInterface
{
    protected  $userModel;

    function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $superAdmins = $this->userModel::whichSuperAdmin()
            ->paginate($this->userModel::PER_PAGE);
    }

    public function store($request) 
    {
        $superadmin = $this->userModel::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::TYPE_SUPER_ADMIN,
        ]);

        return $superadmin;
    }

    public function show($user_id)
    {
        $superAdmin = $this->userModel::whichSuperAdmin()
            ->findOrFail($user_id);
    }

    public function update($request, $user_id)
    {
        $superAdmin = $this->userModel::whichSuperAdmin()
            ->findOrFail($user_id);

        $superAdmin->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]); 

        return $superAdmin;
    }

    public function destroy($user_id)
    {
        $this->userModel::whichSuperAdmin()
            ->whereId($user_id)
            ->delete();
    }
}
