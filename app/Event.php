<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends BaseModel
{
    protected $table = 'events';

    protected $dates = ['start_date', 'attendance_date'];
}
