<?php

namespace App\Http\Controllers;

use App\User;
use UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdaiteValidationRequest;
use App\Http\Requests\PasswordValidationRequest;

class ProfileController extends Controller
{
    public function showProfilePage()
    {
        return view('admin.profile');
    }

    public function showProfilePageDetails()
    {
        return view('admin.userdetails');
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
        UserDetails::personal($request);

        return redirect()->route('profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  id  $user_id
     * @return \Illuminate\Http\Response
     */
    public function changePassword(PasswordValidationRequest $request)
    {   
        UserDetails::password($request);

        return redirect()->route('profile');
    }
}
