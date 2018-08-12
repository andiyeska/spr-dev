<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends BaseModel implements AuthenticatableContract
{
	use Authenticatable;
	
    protected $table = 'users';

    protected $hidden = ['password'];

    protected $dates = ['created_date'];

    public function details() {
    	return $this->hasOne('App\UserDetails', 'user_id', 'id');
    }

}
