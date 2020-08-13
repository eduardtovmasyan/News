<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function showInvitationPage()
    {
        return view('admin.invite');
    }
}
