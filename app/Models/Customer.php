<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    //model untuk table customer
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        //'phonenumber'
    ];
}
