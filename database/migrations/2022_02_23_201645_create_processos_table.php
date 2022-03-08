<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_processo')->unique();
            $table->unsignedBigInteger('requerente_id')->unique();
            $table->foreign('requerente_id')->references('id')->on('requerentes');
            $table->unsignedInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->unsignedInteger('comunidade_id');
            $table->foreign('comunidade_id')->references('id')->on('comunidades');
            $table->date('data_ocupacao');
            $table->date('data_requerimento');
            $table->string('denominacao');
            $table->string('cultura');
            $table->unsignedBigInteger('executor_id');
            $table->foreign('executor_id')->references('id')->on('executores');
            $table->mediumText('observacoes')->nullable();
            $table->unsignedBigInteger('situacao_id');
            $table->foreign('situacao_id')->references('id')->on('situacoes');
            
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
        Schema::dropIfExists('processos');
    }
}
