<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'university', 'status',
        'competition', 'email_verification', 'email_token', 'has_complete_tour'
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

    public function competitions() {
        return $this->hasMany('App\Models\Competition');
    }

    public function payments() {
        return $this->hasMany('App\Models\Payment');
    }
    public function submissions() {
        return $this->hasOne('App\Models\Submission', 'competition_user_id', 'id');
    }

}
