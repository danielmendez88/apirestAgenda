<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('apepaterno', 50);
            $table->string('apematerno', 50);
            $table->string('direccion', 200);
            $table->string('email')->unique();
            $table->string('departamento', 50);
            $table->string('cargo', 50);
            $table->string('area', 80);
            $table->text('telefonos');
            $table->binary('foto');
            $table->longtext('descripcion');
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
        Schema::dropIfExists('directorios');
    }
}
