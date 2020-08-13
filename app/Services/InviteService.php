<?php

namespace App\Services;

use App\User;
use App\Mail\Invitation;
use Illuminate\Support\Facades\Mail;

class InviteService
{
    protected  $userModel;

    function __construct()
    {
        $this->userModel = new User();
    }

    /**
     * @param $data
     */
    public function send($data)
    {
        Mail::to($data['email'])
            ->send(new Invitation($data));
    }
}
