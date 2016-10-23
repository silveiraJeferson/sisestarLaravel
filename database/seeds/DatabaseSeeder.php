<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
        $this->call('FuncionariosSeeder');
        $this->call('NotificacaoSeeder');
        $this->call('IrregularidadesSeeder');
        $this->call('CargosSeeder');
        $this->call('Status_notificacaosSeeder');
        $this->call('LogonSeeder');
    }

}
