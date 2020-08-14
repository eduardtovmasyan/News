<?php

namespace App\Http\Controllers;

use App\User;
use AdminList;
use Illuminate\Http\Request;

class AdminListController extends Controller
{
    public function superAdminList()
    {
        $superAdmins = AdminList::superAdmins();

        return view('admin.super_admins')
            ->with('superAdmins', $superAdmins);
    }

    public function panelAdminList()
    {
        $acceptedPanelAdmins = AdminList::acceptedPanelAdmins();

        return view('admin.panel_admins')
            ->with('acceptedPanelAdmins', $acceptedPanelAdmins);
    }

    public function blockedAdminList()
    {
        $blockedPanelAdmins = AdminList::blockedPanelAdmins();

        return view('admin.blocked')
            ->with('blockedPanelAdmins', $blockedPanelAdmins);
    }

    public function acceptDecline()
    {
        $pandingPanelAdmins = AdminList::pandingPanelAdmins();

        return view('admin.accept_decline')
            ->with('pandingPanelAdmins', $pandingPanelAdmins);
    }
}
