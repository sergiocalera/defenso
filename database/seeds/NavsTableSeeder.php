<?php

use Illuminate\Database\Seeder;

class NavsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->insert([
        	'posicion' => 3,
        	'nombre' => 'main',
        	'titulo' => 'Inicio',
        	'url' => '/'
    	]);
    	
    	DB::table('navs')->insert([
        	'posicion' => 4,
        	'nombre' => 'formulario',
        	'titulo' => 'Formulario',
        	'url' => '/comunicate#form-data'
    	]);

    	DB::table('navs')->insert([
        	'posicion' => 5,
        	'nombre' => 'normatividad',
        	'titulo' => 'Normatividad',
        	'url' => '/normatividad'
    	]);

    }
}
