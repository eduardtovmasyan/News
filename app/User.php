<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * @var string
     */
    const TYPE_SUPER_ADMIN = 'super_admin';
    const TYPE_PANEL_ADMIN = 'panel_admin';
    // Access types
    const TYPE_ACCESS_PANDING = 'panding';
    const TYPE_ACCESS_ACCEPTED = 'accepted';
    const TYPE_ACCESS_DENIED = 'denied';
    const TYPE_ACCESS_INVITED = 'invited';

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
        'name', 'surname', 'email', 'password', 'role', 'is_active',
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

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_users');
    }

    public function scopeWhichSuperAdmin($query)
    {
        return $query->where('role', self::TYPE_SUPER_ADMIN);
    }

    public function scopeWhichPanelAdmin($query)
    {
        return $query->where('role', self::TYPE_PANEL_ADMIN);
    }

    public function scopeWhichAcceptedPanelAdmin($query)
    {
        return $query->where('role', self::TYPE_PANEL_ADMIN)
                    ->where('is_active', self::TYPE_ACCESS_ACCEPTED);
    }

    public function scopeWhichPandingPanelAdmin($query)
    {
        return $query->where('role', self::TYPE_PANEL_ADMIN)
                    ->where('is_active', self::TYPE_ACCESS_PANDING);
    }

    public function scopeWhichBlockedPanelAdmin($query)
    {
        return $query->where('role', self::TYPE_PANEL_ADMIN)
                    ->where('is_active', self::TYPE_ACCESS_DENIED);
    }
}
