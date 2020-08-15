<?php

namespace App\Services;

use App\User;
use App\Mail\Notification;
use Illuminate\Support\Facades\Mail;

class NotificationService
{
    protected  $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function send($array)
    {
        $superAdmins = $this->userModel::WhichSuperAdmin()->get()->toArray();

        foreach ($superAdmins as $superAdmin) {
            Mail::to($superAdmin['email'])
            ->queue(new Notification($array));
        }
    }
}
