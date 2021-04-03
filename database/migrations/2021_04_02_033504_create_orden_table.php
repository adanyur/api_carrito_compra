<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_modo_pago'); 
            $table->foreign('id_modo_pago')->references('id')->on('modo_pago'); 
            $table->unsignedBigInteger('id_usuario'); 
            $table->foreign('id_usuario')->references('id')->on('users'); 
            $table->char('estado',1);
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
        Schema::dropIfExists('orden');
    }
}
