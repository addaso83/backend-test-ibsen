<?php

use Illuminate\Database\Seeder;

class subcategoriasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Coches',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Motos',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Furgonetas Volkswagen',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
	    \DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Autocaravanas',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Furgonetas Camper',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
	    \DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Camiones',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Vehículos Industriales',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
	    \DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Toyota Land Cruiser',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
	    \DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Mercedes Clase A',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Motos 125cc',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Honda CBR 125',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Quads',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Coches clásicos',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Neumáticos',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
	    \DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Remolques',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
		
		\DB::table('subcategorias')->insert(array(
		'categorias_id' => '1',
		'nombre' => 'Recambios y accesorios',
		'created_at' => date('Y-m-d H:m:s'),
		'updated_at' => date('Y-m-d H:m:s')
		));
    }
}
