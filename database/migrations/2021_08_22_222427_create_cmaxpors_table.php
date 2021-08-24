<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmaxporsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmaxpors', function (Blueprint $table) {
            $table->id();
            $table->float('nacion',5,2);
            $table->float('empresa',5,2);
            $table->float('ueb',5,2);
            $table->float('unidad',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cmaxpors');
    }
}
