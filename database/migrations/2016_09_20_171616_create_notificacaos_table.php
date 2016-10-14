<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacaosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('notificacaos', function($table) {
            $table->increments('id');
            $table->string('placa');
            $table->string('pais');
            $table->string('marca');
            $table->string('modelo');
            $table->string('num_notificacao');
            $table->string('data');
            $table->string('hora');
            $table->string('num_cartao');
            $table->string('local');
            $table->string('numero');
            $table->string('irregularidade');
            $table->text('observacao');
            $table->string('data_lim_regularizacao');
            $table->string('valor_amtt');
            $table->string('valor_detran');
            $table->string('num_agente');
            $table->string('setor');       
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('notificacaos');
    }

}
