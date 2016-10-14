<?php

use Illuminate\Database\Seeder;
use sisestar\Status_notificacao;

class Status_notificacaosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('status_notificacaos')->truncate();
        $nomes = ['pendente','regularizado'];
        foreach (range(0, 1)as $i) {
            Status_notificacao::create([
                'nome' => $nomes[$i]
            ]);
        }
    }

}
