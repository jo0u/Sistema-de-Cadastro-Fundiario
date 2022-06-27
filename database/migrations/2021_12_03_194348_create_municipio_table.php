<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('geocodigo', 7);
            $table->string('nome_municipio', 40);
            $table->integer('cep');
            $table->integer('fracao_min');
            $table->integer('mf');
            $table->integer('territorio');
            $table->string('meridiano', 2);
            $table->string('nom_comarc', 3);
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
        Schema::dropIfExists('municipio');
    }
}
