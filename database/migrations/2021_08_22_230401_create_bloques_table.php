<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloques', function (Blueprint $table) {
            $table->string('ueb',3);
            $table->string('unidad',2);
            $table->string('cod',5);
            $table->string('ctrorec',3);
            $table->string('suelo',3);
            $table->string('regplu',1);
            $table->boolean('riego');
            $table->string('drenaje',1);
            $table->string('inc_car',1);
            $table->string('inc_bor',1);
            $table->string('inc_roy',1);
            $table->string('inc_esc',1);
            $table->string('eposiembra',1);
            $table->string('destino',1);
            $table->string('mecaniza',1);
            $table->string('salini',1);
            $table->string('val_agro',1);
            $table->string('var_sel',3);
            $table->float('ptos',5,2);
            $table->float('pot_agro',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloques');
    }
}
