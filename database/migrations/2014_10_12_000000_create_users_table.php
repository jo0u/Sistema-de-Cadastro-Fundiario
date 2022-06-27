<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->boolean('client');
            $table->boolean('admin');
            $table->boolean('consultor');
            $table->boolean('credenciado');
            $table->boolean('juridico');//  parecer jurídico alimenta informações / extrato de sentença para diário
            $table->boolean('cadastrador'); // cadastra / altera/ imprime : carta e certidão de area alguns relatórios. cadastrar confrotante
            $table->boolean('analista_tecnico'); // corrige a planta da área alterar confrontante   / os nomes e o nome da Fazenda,  atualizar status para análise técnica ou pendência técnica
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
        Schema::dropIfExists('users');
    }
}
