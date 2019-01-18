<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    public function presbiterio () {
        return $this->belongsTo('App\Presbiterio');
    }

    public function inscritos() {
        return $this->hasMany('App\Inscrito');
    }
}
