<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdaiteValidationRequest;

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
    public function details(ProfileUpdaiteValidationRequest $request)
    {   
        $user = User::findOrFail(Auth::id());

        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email
        ]); 

        return redirect()->route('profile');
    }
}
