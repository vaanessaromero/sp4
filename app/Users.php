<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    public $fillable = ['first_name', 'last_name','email', 'password', 'branch', 'access_level'];


    public function setPasswordAttribute($value){
    	$this->attributes['password'] = bcrypt($value);
	}
}
