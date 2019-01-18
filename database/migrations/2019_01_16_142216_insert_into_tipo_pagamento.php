<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoTipoPagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tipo_pagamento')->insert([
            ['tipo' => 'Depósito'],
            ['tipo' => 'Transferência'],
            ['tipo' => 'DOC'],
            ['tipo' => 'TED']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tipo_pagamento')->truncate();
    }
}
