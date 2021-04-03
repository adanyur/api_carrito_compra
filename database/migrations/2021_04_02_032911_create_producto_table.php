<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->decimal('precio', $precision = 10, $scale = 2);
            $table->char('estado',1);
            $table->unsignedBigInteger('id_tipo_producto'); // Relación con categorias
            $table->foreign('id_tipo_producto')->references('id')->on('tipo_producto'); 
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
        Schema::dropIfExists('producto');
    }
}
