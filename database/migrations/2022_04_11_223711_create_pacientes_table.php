<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->integer('edad'); 
            $table->enum('sexo', ['M', 'F', 'O']); //M= Masculino F= Femenino O = Otros
            $table->string('cedula', 12)->unique();
            $table->string('tipo_sangre', 4)->nullable();
            $table->string('telefono', 12)->nullable();
            $table->string('correo', 60)->nullable();
            $table->string('direccion')->nullable();
            $table->softDeletes('deleted_at',0);
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
        Schema::dropIfExists('pacientes');
    }
}
