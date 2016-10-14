<?php

use Illuminate\Database\Seeder;
use sisestar\Funcionario;
use Faker\Factory as Faker;

class FuncionariosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('funcionarios')->truncate();
        $faker = Faker::create();
        foreach (range(1, 200) as $i){
            $a = rand(1, 20);
            $foto = "$a.jpg";
            Funcionario::create([
                'cargo' => rand(1, 3),
                'nome' => $faker->name,
                'sobrenome' => $faker->lastName,
                'cpf' => $faker->numberBetween($min = 000000000000, $max = 99999999999),
                'foto' => $foto,
                'matricula' => $faker->numberBetween($min = 000000000000, $max = 99999999999),
                'data_nasc' => $faker->date($format = 'Y-m-d', $max = 2005-06-15)
                
            ]);
        }
    }

}
