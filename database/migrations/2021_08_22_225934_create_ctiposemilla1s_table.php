<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtiposemilla1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctiposemilla1s', function (Blueprint $table) {
            $table->string('ueb',3);
            $table->string('cod',1);
            $table->string('nombre',20);
            $table->integer('edad_pr');
            $table->float('proporc_pr',5,2);
            $table->integer('edad_fr');
            $table->float('proporc_fr',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ctiposemilla1s');
    }
}
