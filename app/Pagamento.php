<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    public static function count() {
        return count(static::all());
    }

    public function tipoPagamento() {
        return $this->belongsTo('App\TipoPagamento');
    }

    public static function saldo() {
        $saldo = 0;

        foreach (static::all() as $pagamento) {
            $saldo += $pagamento->valor;
        }

        return $saldo;
    }

    public static function numDividasQuitadas() {
        $dividas_quitadas = static::groupBy('inscrito_id')
            ->selectRaw('inscrito_id, sum(valor) as valor')
            ->having('valor', '>=', '190')
            ->get();
        $num = count($dividas_quitadas);
        return $num;
    }

    public static function numPagamentos() {
        return count(static::all());
    }

    public static function porInscrito() {
        $saldo_por_inscrito = [];

        foreach (Inscrito::all() as $inscrito) {
            $valor = 0;

            foreach ($inscrito->pagamentos as $pagamento) {
                $valor += $pagamento->valor;
            }

            $saldo_por_inscrito[] = [
                'inscrito' => $inscrito,
                'valor' => $valor
            ];
        }

        return $saldo_por_inscrito;
    }

    public function inscrito() {
        return $this->belongsTo('App\Inscrito');
    }
}
