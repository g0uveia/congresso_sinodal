<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPagamento extends Model
{
    public $table = 'tipo_pagamento';

    public function valorTotal() {
        $sum = 0;

        foreach ($this->pagamentos as $pagamento) {
            $sum += $pagamento->valor;
        }

        return $sum;
    }

    public function pagamentos() {
        return $this->hasMany('App\Pagamento');
    }
}
