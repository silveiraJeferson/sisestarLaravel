<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function($table){
           $table->increments('id') ;
           $table->string('nome', 50);
           $table->string('sobrenome', 50);
           $table->string('cpf', 11);
           $table->string('matricula', 20);
           $table->date('data_nasc');           
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
        Schema::drop('funcionarios');
    }
}
