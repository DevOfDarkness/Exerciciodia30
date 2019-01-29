<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emprestimo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('emprestimo', function (Blueprint $table){
          $table->increments('id');
          $table->string('status');
          $table->integer('id_cliente')->unsigned()->nullable();
          $table->integer('id_livro')->unsigned()->nullable();
          $table->string('dataDeTermino');
          $table->string('dataDeInicio');

      });

      Schema::table('emprestimo', function(Blueprint $table){
          $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('set null');
          $table->foreign('id_livro')->references('id')->on('livros')->onDelete('set null');


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
