<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presbiterio extends Model
{
    public function igrejas ()
    {
        return $this->hasMany('App\Igreja');
    }
}
