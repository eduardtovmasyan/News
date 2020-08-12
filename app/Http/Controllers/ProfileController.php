<?php

namespace App\Http\Controllers;

use UserCrud;
use Illuminate\Http\Request;
use App\Http\Requests\UserValidateRequest;

class ProfileController extends Controller
{
    public function showProfilePage()
    {
        return view('admin.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  id  $user_id
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
