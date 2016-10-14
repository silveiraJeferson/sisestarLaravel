<?php

use Illuminate\Database\Seeder;
use sisestar\Cargo;
class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->truncate();
        Cargo::create([            
            'nome' => 'Agente de trânsito'
        ]);
        Cargo::create([            
            'nome' => 'Administrativo'
        ]);
        Cargo::create([            
            'nome' => 'Master'
        ]);
    }
}
