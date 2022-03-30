<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';

    protected $fillable =
    [
        'name',
        'mail',
        'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
