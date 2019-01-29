<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Livros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table){
          $table->increments('Id');
          $table->string('Tutor');
          $table->string('Titulo');
          $table->string('Editora');
          $table->string('Versao');
          $table->integer('Qtd_Estque');
          $table->integer('Ano_Lancamento');
          $table->integer('Qtd_Emprestada');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
