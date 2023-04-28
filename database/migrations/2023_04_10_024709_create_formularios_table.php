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
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cadastro_id')->unique()->nullable(false);
            $table->foreign('cadastro_id')->references('id')->on('cadastros')->onDelete('cascade')->nullable(false);
            $table->string('nomeProjeto');
            $table->integer('plataforma')->nullable();
            $table->string('descricao');
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
        Schema::table('formularios', function (Blueprint $table) {
        $table->foreing('cadastro_id')->constrained()->onDelete('cascade');
    });
   }
    
};
