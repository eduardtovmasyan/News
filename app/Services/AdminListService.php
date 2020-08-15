<?php

namespace App\Services;

use App\User;

class AdminListService
{
    protected  $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function superAdmins()
    {
        return $this->userModel::WhichSuperAdmin()->orderByDesc('id')->paginate($this->userModel::PER_PAGE);
    }

    public function acceptedPanelAdmins()
    {
        return $this->userModel::WhichAcceptedPanelAdmin()->orderByDesc('id')->paginate($this->userModel::PER_PAGE);
    }

    public function pandingPanelAdmins()
    {
        return $this->userModel::WhichPandingPanelAdmin()->orderByDesc('id')->paginate($this->userModel::PER_PAGE);
    }

    public function blockedPanelAdmins()
    {
        return $this->userModel::WhichBlockedPanelAdmin()->orderByDesc('id')->paginate($this->userModel::PER_PAGE);
    }
}
