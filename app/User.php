<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
    * @property mixed  id
    * @property mixed  username
    * @property char password
    * @property mixed email
    */
   protected $table='users';
   protected $fillable = [
       'id','username', 'password','email','created_at','remember_token'
   ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
