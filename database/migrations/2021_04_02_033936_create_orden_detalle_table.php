<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_orden'); 
            $table->foreign('id_orden')->references('id')->on('orden'); 
            $table->unsignedBigInteger('id_producto'); 
            $table->foreign('id_producto')->references('id')->on('producto'); 
            $table->integer('cantidad');
            $table->decimal('precio', $precision = 10, $scale = 2);
            $table->decimal('subtotal', $precision = 10, $scale = 2);
            $table->decimal('igv', $precision = 10, $scale = 2);
            $table->decimal('total', $precision = 10, $scale = 2);
            $table->unsignedBigInteger('id_usuario'); 
            $table->foreign('id_usuario')->references('id')->on('users'); 
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
        Schema::dropIfExists('orden_detalle');
    }
}
