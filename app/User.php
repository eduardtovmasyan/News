<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * @var string
     */
    const TYPE_SUPER_ADMIN = 'super_admin';
    const TYPE_PANEL_ADMIN = 'panel_admin';

    /**
     * @var int
     */
    const PER_PAGE = 5;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    

    public function scopeWhichSuperAdmin($query)
    {
        return $query->where('role', self::TYPE_SUPER_ADMIN);
    }

    public function scopeWhichPanelAdmin($query)
    {
        return $query->where('role', self::TYPE_PANEL_ADMIN);
    }
}
