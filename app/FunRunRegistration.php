<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunRunRegistration extends BaseModel
{
    protected $table = 'fun_run_registrations';

    public function registration() {
    	return $this->belongsTo('App\Registration', 'registration_id', 'id');
    }
}
