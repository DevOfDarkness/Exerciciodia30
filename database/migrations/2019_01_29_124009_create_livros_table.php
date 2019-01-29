<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('livros', function (Blueprint $table){
           $table->increments('id');
           $table->string('autor');
           $table->string('titulo');
           $table->string('editora');
           $table->string('versao');
           $table->integer('qtd_estoque');
           $table->integer('ano_lancamento');
           $table->integer('qtd_emprestada');
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
        Schema::dropIfExists('livros');
    }
}
