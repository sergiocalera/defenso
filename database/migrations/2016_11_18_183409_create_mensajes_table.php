<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mensaje');
            $table->boolean('publico');
            $table->string('motivo_mensaje');
            // estado = true: guardado false: borrado 
            $table->boolean('estado')->default(true);
            $table->boolean('aprobado')->default(false);
            $table->date('fecha');
            $table->integer('audiencia_id')->unsigned();
            $table->foreign('audiencia_id')
                ->references('id')->on('audiencias')
                ->onDelete('cascade');
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
        Schema::dropIfExists('mensajes');
    }
}
