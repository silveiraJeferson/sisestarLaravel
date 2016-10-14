<?php

use Illuminate\Database\Seeder;
use sisestar\Irregularidade;
class IrregularidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('irregularidades')->truncate();
        Irregularidade::create([
            'codigo' => 1,
            'nome' => 'Preenchimento irregular do cartão'
        ]);
        Irregularidade::create([
            'codigo' => 2,
            'nome' => 'Período ultrapassado'
        ]);
        Irregularidade::create([
            'codigo' => 3,
            'nome' => 'Cartão em branco'
        ]);
        Irregularidade::create([
            'codigo' => 4,
            'nome' => 'Falta do cartão'
        ]);
        Irregularidade::create([
            'codigo' => 5,
            'nome' => 'Outras irregularidades'
        ]);
        
    }
}
