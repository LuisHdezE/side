<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtipossemillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctipossemillas', function (Blueprint $table) {
            $table->string('cod',1)->unique();
            $table->string('nombre',20);
            $table->integer('edad');
            $table->integer('proporc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ctipossemillas');
    }
}
