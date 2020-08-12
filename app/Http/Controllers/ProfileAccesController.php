<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileAccesController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function access(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);

        $user->update([
            'is_active' => $request->is_active
        ]); 

        return $user;
    }
}
