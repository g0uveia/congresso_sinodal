<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIgrejas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('igrejas')->insert([
            ['presbiterio_id' => 1, 'nome' => 'Camacan'],
            ['presbiterio_id' => 1, 'nome' => 'Leoventura'],
            ['presbiterio_id' => 1, 'nome' => 'Pau Brasil '],
            ['presbiterio_id' => 1, 'nome' => 'Una'],
            ['presbiterio_id' => 1, 'nome' => 'Canavieiras '],
            ['presbiterio_id' => 1, 'nome' => 'Cong. Sao João do Paraíso '],
            ['presbiterio_id' => 1, 'nome' => 'Cong. Mascote'],
            ['presbiterio_id' => 2, 'nome' => 'Ilhéus'],
            ['presbiterio_id' => 2, 'nome' => 'Cong. Monte Sinai'],
            ['presbiterio_id' => 2, 'nome' => 'Cong. Perseverança'],
            ['presbiterio_id' => 2, 'nome' => 'Cong. Hebrom'],
            ['presbiterio_id' => 2, 'nome' => '1ª de Itabuna '],
            ['presbiterio_id' => 2, 'nome' => '2ª de Itabuna'],
            ['presbiterio_id' => 2, 'nome' => 'Coaraci '],
            ['presbiterio_id' => 2, 'nome' => 'Itajuípe '],
            ['presbiterio_id' => 2, 'nome' => 'Campo miss. Ipiaú'],
            ['presbiterio_id' => 2, 'nome' => 'Campo miss. Ubaitaba'],
            ['presbiterio_id' => 2, 'nome' => 'Cong. Itapé'],
            ['presbiterio_id' => 3, 'nome' => '1ª de Itamaraju'],
            ['presbiterio_id' => 3, 'nome' => '2ª de Itamaraju'],
            ['presbiterio_id' => 3, 'nome' => 'Liberdade'],
            ['presbiterio_id' => 3, 'nome' => 'Teixeira de Freitas'],
            ['presbiterio_id' => 3, 'nome' => 'Medeiros Neto'],
            ['presbiterio_id' => 3, 'nome' => 'Cong. Itabatã'],
            ['presbiterio_id' => 3, 'nome' => 'Cong. Mucuri '],
            ['presbiterio_id' => 3, 'nome' => 'Cong. Posto da Mata'],
            ['presbiterio_id' => 4, 'nome' => 'Jardim das Oliveiras'],
            ['presbiterio_id' => 4, 'nome' => '5ª de Itabuna'],
            ['presbiterio_id' => 4, 'nome' => 'Vale de Bençãos'],
            ['presbiterio_id' => 4, 'nome' => 'Cong. Filadélfia'],
            ['presbiterio_id' => 4, 'nome' => 'Jequié'],
            ['presbiterio_id' => 4, 'nome' => 'Campo miss. Buerarema'],
            ['presbiterio_id' => 4, 'nome' => 'Campo miss. Itacaré'],
            ['presbiterio_id' => 5, 'nome' => '1ª de Eunapolis'],
            ['presbiterio_id' => 5, 'nome' => '2ª de Eunapolis'],
            ['presbiterio_id' => 5, 'nome' => '3ª de Eunapolis'],
            ['presbiterio_id' => 5, 'nome' => 'Terra Máter'],
            ['presbiterio_id' => 5, 'nome' => 'Belmonte'],
            ['presbiterio_id' => 5, 'nome' => 'Cong. Biela'],
            ['presbiterio_id' => 5, 'nome' => 'Guaratinga'],
            ['presbiterio_id' => 5, 'nome' => 'Porto Seguro'],
            ['presbiterio_id' => 5, 'nome' => 'Cong. Barrolandia'],
            ['presbiterio_id' => 5, 'nome' => 'Cong. Itabela'],
            ['presbiterio_id' => 5, 'nome' => 'Cong. Moisés Reis'],
            ['presbiterio_id' => 5, 'nome' => 'Cong. Dinah Borges'],
            ['presbiterio_id' => 5, 'nome' => 'Cong. Itagimirim '],
            ['presbiterio_id' => 5, 'nome' => 'Cong. São João do Sul'],
            ['presbiterio_id' => 5, 'nome' => 'Campo Miss. Central de Porto Seguro'],
            ['presbiterio_id' => 6, 'nome' => '1ª de Vitoria da Conquista '],
            ['presbiterio_id' => 6, 'nome' => 'Alianca'],
            ['presbiterio_id' => 6, 'nome' => 'Cong. Urbis VI '],
            ['presbiterio_id' => 6, 'nome' => 'Ibicarai'],
            ['presbiterio_id' => 6, 'nome' => 'Itapetinga'],
            ['presbiterio_id' => 6, 'nome' => 'Jequié '],
            ['presbiterio_id' => 6, 'nome' => 'Cong. Brumado']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('igrejas')->truncate();
    }
}
