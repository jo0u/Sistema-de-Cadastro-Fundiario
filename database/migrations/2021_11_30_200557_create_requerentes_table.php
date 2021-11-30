<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequerentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerentes', function (Blueprint $table) {
  
                $table->id();
                $table->string('cpf');
                $table->string('pessoa');
                $table->string('nome');
                $table->string('sexo');
                $table->string('profissional');
                $table->string('estado');
                $table->date('data_nascimento');
                $table->string('nacionalidade');
                $table->string('rg');
                $table->string('estado_civil');
                $table->string('telefone');
                $table->string('email');
                $table->string('endereco');
                $table->string('nome_pai');
                $table->string('nome_mae');
                $table->string('nome_conjugue');
                $table->string('cpf_conjugue');
                $table->string('rg_conjugue');
                $table->string('estado_conjugue');
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
        Schema::dropIfExists('requerentes');
    }
}
