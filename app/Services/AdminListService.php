<?php

namespace App\Services;

use App\User;

class AdminListService
{
    protected  $userModel;

    function __construct()
    {
        $this->userModel = new User();
    }

    public function superAdmins()
    {
        return $this->userModel::WhichSuperAdmin()->paginate($this->userModel::PER_PAGE);
    }

    public function acceptedPanelAdmins()
    {
        return $this->userModel::WhichAcceptedPanelAdmin()->paginate($this->userModel::PER_PAGE);
    }

    public function pandingPanelAdmins()
    {
        return $this->userModel::WhichPandingPanelAdmin()->paginate($this->userModel::PER_PAGE);
    }
}
