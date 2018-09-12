<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrestamosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->string('estado');
            $table->string('serie');
            $table->string('descripcion');
            $table->integer('producto_id')->unsigned();
            $table->integer('empleado_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prestamos');
    }
}
