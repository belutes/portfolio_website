<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
    protected $fillable = ['firstName', 'lastName', 'username', 'password', 'email', 'isAdmin', 'isLoggedIn'];
}
