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
        Schema::create('dados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formulario_id');
            $table->foreign('formulario_id')->references('id')->on('formularios')->onDelete('cascade')->nullable(false);
            $table->string('descricao');
            $table->string('detalhamento');
            $table->string('recurso');
            $table->string('acoes');
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
        Schema::table('dados', function (Blueprint $table) {
            $table->foreing('formulario_id')->constrained()->onDelete('cascade');
        });
    }
};
