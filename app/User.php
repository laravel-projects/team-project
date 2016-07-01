<?php

namespace TeamProject;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'firstname' ,
            'lastname'  ,
            'username'  ,
            'gender' ,
            'email' , 
            'img',
            'birthday',
            'pay',
            'city',
            'Address',
            'phone',
            'facebook',
            'twitter',
            'github',
            'youtube',
            'web',
            'last_login',
            'last_logout',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
            'password', 
            'remember_token',
            'role',
            'bloque', 
    ];
}
