<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anunciospublicados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anunciospublicados', function (Blueprint $table) {
            $table->id();
			$table->string('titulo', 100);
			$table->string('descripcion_corta', 200);
			$table->string('descripcion_larga', 500);
			$table->string('publicador', 15);
			$table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anunciospublicados');
    }
}
