<?php

namespace App\Http\Controllers;

use Create;
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
        Invite::send($request);
    }

    public function store(CreateAdminValidationRequest $request)
    {
        $users = Create::store($request);

        return UserResource::collection($users);
    }
}
