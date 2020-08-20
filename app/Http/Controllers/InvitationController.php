<?php

namespace App\Http\Controllers;

use Invite;
use Illuminate\Http\Request;
use App\Http\Requests\InviteValidationRequest;
use App\Http\Requests\CreateAdminValidationRequest;

class InvitationController extends Controller
{
    public function showInvitationPage()
    {
        return view('admin.invite');
    }

    public function sendInvitationMail(InviteValidationRequest $request)
    {
        $req = $request->toArray();

        Invite::send($req);

        return redirect()->route('invite');
    }

    public function store(CreateAdminValidationRequest $request)
    {
        $users = UserCrud::createAdmin($request);

        return UserResource::collection($users);
    }
}
