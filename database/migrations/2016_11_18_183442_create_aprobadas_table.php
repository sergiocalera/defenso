<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprobadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprobadas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mensaje_id')->unsigned();
            $table->foreign('mensaje_id')
                ->references('id')->on('mensajes')
                ->onDelete('cascade');
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('aprobadas');
    }
}
