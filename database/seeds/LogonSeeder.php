<?php

use Illuminate\Database\Seeder;
use sisestar\Logon;

class LogonSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('logons')->truncate();
        foreach (range(0, 50) as $i) {
            Logon::create([
                'id_funcionario' => $i,
                'logado' => rand(0, 1)
            ]);
        }
    }

}
