<?php

namespace App;
use App\UserDetails;

use Illuminate\Database\Eloquent\Model;

class PublicationMedia extends BaseModel
{
    protected $table = 'publication_medias';

    public function effectivity()
    {
    	return UserDetails::where('publication_media_id', $this->id)->count();
    }

}
