<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class anunciosPublicadosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*\DB::table('anunciospublicados')->insert(array(
		'titulo' => 'MOTOR',
		'descripcion_corta' => 'MOTOR',
		'descripcion_larga' => 'MOTOR',
		'publicador' => 'MOTOR',
		'estado' => 'MOTOR',
		'categorias_id' => 'MOTOR',
		'subcategorias_id' => 'MOTOR',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));*/
		
		$faker = Faker::create();
		for ($i=0; $i < 50; $i++) {
			\DB::table('anunciospublicados')->insert(array(
			'titulo' => $faker->randomElement(['Vendo Auto Nuevo','Vendo Auto de Segunda Mano','Vendo Carro Urgente']),
			'descripcion_corta' => $faker->randomElement(['Toyota 2000','Nissan 1998','Prado 95']),
			'descripcion_larga' => $faker->randomElement(['Aprovecha esta navidad tener un auto nuevo','Tenemos el auto que tu buscas','Ganga por fin de año']),
			'publicador' => 'admin',
			'estado' => 1,
			'categorias_id' => 1,
			'subcategorias_id' => 1,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
			));
		}

    }
}
