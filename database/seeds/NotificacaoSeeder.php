<?php

use Illuminate\Database\Seeder;
use sisestar\Notificacao;
use Faker\Factory as Faker;
class NotificacaoSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        DB::table('notificacaos')->truncate();
        $letrasPlaca = ['a','b','c','d','e','f','g','h','i','j'];
        $faker = Faker::create();
        
        foreach (range(1, 500) as $i){ 
            // gerador de placa e dia
            $letras = "";
            $numerosPlaca = "";
            for($i = 0; $i < 3; $i++){
                $letras .= $letrasPlaca[rand(0, 9)];
            }
            for($i = 0; $i < 4; $i++){
                $numerosPlaca .= rand(0, 9);
            }
            $dia = rand(17, 31);
            //------------------------------------------
            
            Notificacao::create([
                'placa' => "$letras - $numerosPlaca",
                'pais' => $faker->country,
                'marca' => $faker->word,
                'modelo' => $faker->word,
                'num_notificacao' => rand(1000, 999999),
                'data' => "$dia/10/2016",
                'hora' => rand(9, 18).':'.  rand(00, 59),
                'num_cartao' => rand(1000, 999999),
                'local' => $faker->address,
                'numero' => rand(1, 9999),
                'irregularidade' => rand(1, 5),
                'observacao' => $faker->sentence,
                'data_lim_regularizacao' => $faker->dateTime,
                'valor_amtt' => rand(1000, 999999),
                'valor_detran' => rand(1000, 999999),
                'num_agente' => rand(1, 20),
                'setor' => rand(1000, 999999),
                'status' => rand(1, 2)
                
            ]);
        }
    }

}
