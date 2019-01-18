<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presbiterio extends Model
{
    public function numInscritos () {
        $num = 0;

        foreach ($this->igrejas as $igreja) {
            $num += count($igreja->inscritos);
        }

        return $num;
    }

    public function igrejas () {
        return $this->hasMany('App\Igreja');
    }
}
