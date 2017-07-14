<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('email', 50)->unique();
            $table->string('telefone');
            $table->date('nascimento');
            $table->enum('escolaridade',['Ensino Médio','Técnico','Superior cursando', 'Superior completo', 'Superior incompleto', 'Pós graduação']);
            $table->string('instituicao')->nullable();
            $table->string('curso')->nullable();
            $table->integer('conclusao')->nullable();
            $table->string('empresa')->nullable();
            $table->integer('coach_id')->unsigned();
            $table->foreign('coach_id')->references('id')->on('coaches');
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
        Schema::dropIfExists('cadastros');
    }
}
