<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorasMatenimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas_mantenimiento', function (Blueprint $table) {
            $table->increments('id_horas_mantenimiento');
            $table->integer('id_maquinaria')->unsigned();
            $table->decimal('total_horas', 6, 2);
            $table->char('estado', 1);
            $table->timestamps();
            $table->foreign('id_maquinaria')->references('id_maquinaria')->on('maquinaria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horas_mantenimiento');
    }
}
