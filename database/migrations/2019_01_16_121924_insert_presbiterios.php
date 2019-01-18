<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertPresbiterios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('presbiterios')->insert([
            ['id' => 1, 'sigla' => 'PESB'],
            ['id' => 2, 'sigla' => 'PITB'],
            ['id' => 3, 'sigla' => 'PITJ'],
            ['id' => 4, 'sigla' => 'PRGP'],
            ['id' => 5, 'sigla' => 'PRTM'],
            ['id' => 6, 'sigla' => 'PSSB']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('presbiterios')->truncate();
    }
}
