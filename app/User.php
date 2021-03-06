<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password','firstname','phone','email_verified_at','type','enterprise_id','cycle_id','deleted'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function enterprises(){
        return $this->belongsTo(enterprise::class, 'enterprise_id');
        }
    public function cycles(){
        return $this->belongsTo(cycle::class, 'cycle_id');
        }
}
