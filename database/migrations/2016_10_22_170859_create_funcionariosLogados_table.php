<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosLogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
         DB::statement(" CREATE VIEW  funcionarios_logados AS(
                        SELECT f.nome, f.id, f.foto, l.logado FROM funcionarios f
                        INNER JOIN logons l ON l.id_funcionario = f.id
                        ORDER BY f.nome)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
         DB::statement("DROP VIEW  funcionarios_logados");
    }
}
