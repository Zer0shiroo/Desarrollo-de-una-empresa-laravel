<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('rol')->nullable();
            $table->string('fecha_nacimiento')->nullable();
            $table->string('dni');
            $table->string('email')->unique();
            $table->foreignId('office_id')->constrained('oficinas')->onDelete('cascade');  // Especificamos la tabla 'oficinas'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
