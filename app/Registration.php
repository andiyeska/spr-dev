<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends BaseModel
{
    protected $table = 'registrations';

    protected $dates = ['registration_date'];

    public function user() {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function funRun() {
    	return $this->hasOne('App\FunRunRegistration', 'registration_id', 'id');
    }

    public function festival() {
    	return $this->hasOne('App\FestivalRegistration', 'registration_id', 'id');
    }
}
