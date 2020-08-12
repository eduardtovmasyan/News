<?php

namespace App\Http\Controllers;

use UserCrud;
use Illuminate\Http\Request;

class AdminListController extends Controller
{
    public function adminList()
    {
    	$users = UserCrud::index();

        return view('admin.adminlist')->with('users', $users);
    }
}
