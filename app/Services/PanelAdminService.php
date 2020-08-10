<?php

namespace App\Services;

use App\User;
use App\Contracts\PanelAdminInterface;

class PanelAdminService implements PanelAdminInterface
{
    protected  $userModel;

    function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $panelAdmins = $this->userModel::whichPanelAdmin()
            ->paginate($this->userModel::PER_PAGE);
    }

    public function store($request) 
    {
        $paneladmin = $this->userModel::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::TYPE_PANEL_ADMIN,
        ]);

        return $paneladmin;
    }

    public function show($user_id)
    {
        $panelAdmins = $this->userModel::whichPanelAdmin()
            ->findOrFail($user_id);
    }

    public function update($request, $user_id)
    {
        $panelAdmins = $this->userModel::whichPanelAdmin()
            ->findOrFail($user_id);

        $panelAdmins->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]); 

        return $panelAdmins;
    }

    public function destroy($user_id)
    {
        $this->userModel::whichPanelAdmin()
            ->whereId($user_id)
            ->delete();
    }
}
