<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FestivalRegistration extends BaseModel
{
    protected $table = 'festival_registrations';

    public function registration() {
    	return $this->belongsTo('App\Registration', 'registration_id', 'id');
    }
}
