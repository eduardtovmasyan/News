<?php

namespace App\Http\Controllers;

use App\User;
use AdminList;
use Illuminate\Http\Request;

class AdminListController extends Controller
{
    public function adminList()
    {
        $superAdmins = AdminList::superAdmins();
        $acceptedPanelAdmins = AdminList::acceptedPanelAdmins();
        $pandingPanelAdmins = AdminList::pandingPanelAdmins();
        $blockedPanelAdmins = AdminList::blockedPanelAdmins();

        return view('admin.adminlist')
            ->with('superAdmins', $superAdmins)
            ->with('pandingPanelAdmins', $pandingPanelAdmins)
            ->with('acceptedPanelAdmins', $acceptedPanelAdmins)
            ->with('blockedPanelAdmins', $blockedPanelAdmins);
    }
}
