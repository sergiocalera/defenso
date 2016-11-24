<?php

use Illuminate\Database\Seeder;

class SeccionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seccions')->insert([
        	'posicion' => 3,
        	'nombre' => 'defensoria',
        	'titulo' => '¿Qué es la Defensoría de las Audiencias?',
        	'url' = > '/defensoria'
    	]);

    	DB::table('seccions')->insert([
        	'posicion' => 4,
        	'nombre' => 'derechos',
        	'titulo' => 'Derechos de las Audiencias',
        	'url' = > '/derechos'
    	]);

    	DB::table('seccions')->insert([
        	'posicion' => 4,
        	'nombre' => 'defensora',
        	'titulo' => '¿Quién es la Defensora?',
        	'url' = > '/defensora'
    	]);
    	
    	DB::table('seccions')->insert([
        	'posicion' => 4,
        	'nombre' => 'defensora',
        	'titulo' => '¿Quién es la Defensora?',
        	'url' = > '/defensora'
    	]);


    }
}
