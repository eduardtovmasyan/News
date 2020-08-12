<?php

namespace App\Http\Controllers;

use App\User;
use UserDetails;
use Illuminate\Http\Request;

class ProfileAccesController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function access(Request $request, $user_id)
    {
        return UserDetails::access($request, $user_id);
    }
}
