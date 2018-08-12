<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends BaseModel
{
    protected $table = 'articles';

    protected $dates = ['post_date'];
}
