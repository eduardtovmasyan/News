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

    /**
     * @return \Illuminate\Http\Response
     */
    public function block($user_id)
    {
        return UserDetails::block($user_id);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function invited($user_id)
    {
        UserDetails::invited($user_id);
        
        return redirect()->route('login');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function admit($user_id)
    {
        return UserDetails::admit($user_id);
    }
}
