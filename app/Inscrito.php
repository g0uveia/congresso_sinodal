<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
    public function igreja ()
    {
        return $this->belongsTo('App\Igreja');
    }
}
