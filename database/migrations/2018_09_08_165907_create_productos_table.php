<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('codigo');
            $table->integer('cantidad_ingreso');
            $table->integer('cantidad_egreso');
            $table->integer('stock');
            $table->integer('tipoproducto_id')->unsigned();
            $table->integer('marcaproducto_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipoproducto_id')->references('id')->on('tipo_productos');
            $table->foreign('marcaproducto_id')->references('id')->on('marca_proveedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}
