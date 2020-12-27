<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;


class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('categorias')->insert(array(
		'nombre' => 'MOTOR',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'INMOBILIARIO',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'EMPLEOS',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'FORMACIÓN Y LIBROS',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'SERVICIOS',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'NEGOCIOS',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'INFORMÁTICA',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'IMAGEN Y SONIDO',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'MÓVILTES Y TELEFONÍA',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'JUEGOS',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'CASA Y JARDÍN',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'MODA Y COMPLEMENTOS',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'BEBÉS',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'AFICIONES Y OCIO',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'DEPORTES Y NÁUTICA',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('categorias')->insert(array(
		'nombre' => 'MASCOTAS',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));

    }
}
