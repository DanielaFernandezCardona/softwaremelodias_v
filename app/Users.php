<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    protected $table = 'users';


    protected $fillable=[

        'ussername', 'password', 'email',
    ];



      public function Clientes()
      {
        return $this->belongsTo('App\Clientes');
      }



}