<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmadurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmaduras', function (Blueprint $table) {
            $table->string('codigo',1)->unique();
            $table->string('nombre',10);
            $table->string('um',10);
            $table->float('precio',6,3);
            $table->float('precio2',6,3);
            $table->float('dosis',6,3);
            $table->float('inc_rend',6,3);
            $table->boolean('utilizar');
            $table->boolean('n_e_dre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cmaduras');
    }
}
