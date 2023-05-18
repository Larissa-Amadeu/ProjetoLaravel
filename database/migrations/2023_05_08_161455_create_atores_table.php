<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formulario_id');
            $table->foreign('formulario_id')->references('id')->on('formularios')->onDelete('cascade')->nullable(false);
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('agencia');
            $table->string('rua');
            $table->string('numero');
            $table->string('codigoPostal');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');
            $table->integer('tipo');
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
        Schema::table('atores', function (Blueprint $table) {
            $table->foreing('formulario_id')->constrained()->onDelete('cascade');
        });
    }
};
