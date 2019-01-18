<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Inscrito extends Model
{

    public static function ultimos() {
        return static::latest()->take(5)->get();
    }

    public static function numInscritos() {
        return count(static::all());
    }

    public function pagamentosPorMes () {
        $pagamentos = $this->pagamentos;

        $count = [
            'Jan' => 0,
            'Fev' => 0,
            'Mar' => 0,
            'Abr' => 0,
            'Mai' => 0,
            'Jun' => 0
        ];


        foreach ($pagamentos as $pagamento) {
            $date = new Carbon($pagamento->data_pagamento);
            if ($date->year == 2019) {
                switch ($date->month) {
                    case 1:
                        $count['Jan'] += $pagamento->valor;
                        break;
                    case 2:
                        $count['Fev'] += $pagamento->valor;
                        break;
                    case 3:
                        $count['Mar'] += $pagamento->valor;
                        break;
                    case 4:
                        $count['Abr'] += $pagamento->valor;
                        break;
                    case 5:
                        $count['Mai'] += $pagamento->valor;
                        break;
                    case 6:
                        $count['Jun'] += $pagamento->valor;
                        break;
                }
            }
        }

        return $count;
    }

    public static function porMes() {
        // Pegar todos os inscritos
        $inscritos = static::all();

        // Contadores
        $count = [
            'Jan' => 0,
            'Fev' => 0,
            'Mar' => 0,
            'Abr' => 0,
            'Mai' => 0,
            'Jun' => 0
        ];

        // Para cada inscrito
        foreach ($inscritos as $inscrito) {
            // Se mês e ano do created_at for igual...
            if ($inscrito->created_at->year == 2019) {
                switch ($inscrito->created_at->month) {
                    case 1:
                    $count['Jan']++;
                    break;
                    case 2:
                    $count['Fev']++;
                    break;
                    case 3:
                    $count['Mar']++;
                    break;
                    case 4:
                    $count['Abr']++;
                    break;
                    case 5:
                    $count['Mai']++;
                    break;
                    case 6:
                    $count['Jun']++;
                    break;
                }
            }
        }

        // Retornar contadores
        return $count;

    }

    public static function rules() {
        $rules = [
            'nome' => 'string|unique:inscritos',
            'nascimento' => 'date',
            'sexo' => 'alpha',
            'email' => 'email',
        ];

        return $rules;
    }

    public static function messages() {
        $messages = [
            'nome.unique' => 'Você já está inscrito',
            'nascimento.date' => 'Data de nascimento inválida',
            'email' => 'O email inválido. Por favor, use o formato exemplo@exemplo.com',
        ];

        return $messages;
    }



    public function dataNascimento() {
        $data = new Carbon($this->nascimento);
        return $data->format('d\-m\-Y');
    }

    public function igreja () {
        return $this->belongsTo('App\Igreja');
    }

    public function pagamentos() {
        return $this->hasMany('App\Pagamento');
    }

    public function valorPago () {
        $sum = 0;

        foreach ($this->pagamentos as $pagamento) {
            $sum += $pagamento->valor;
        }

        return $sum;
    }

}
