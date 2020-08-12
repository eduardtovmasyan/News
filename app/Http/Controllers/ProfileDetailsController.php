<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileDetailsController extends Controller
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

    /**
     * @return \Illuminate\Http\Response
     */
    public function details(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email
        ]); 

        return $user;
    }
}
