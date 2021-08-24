<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmbiologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmbiologicos', function (Blueprint $table) {
            $table->string('codigo',3)->unique();
            $table->string('nombre',50);
            $table->float('cantidad',6,3);
            $table->float('norma',6,3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cmbiologicos');
    }
}
