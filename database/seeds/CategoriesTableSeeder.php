<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'title' => 'Herramientas para las audiencias'
    	]);

    	DB::table('categories')->insert([
        	'title' => 'Artículos'
    	]);

    	DB::table('categories')->insert([
        	'title' => 'Códigos de ética de otros medios de comunicación'
    	]);

    	DB::table('categories')->insert([
        	'title' => 'Estatutos defensorías'
    	]);

    	DB::table('categories')->insert([
        	'title' => 'Organización de defensoras y defensores de las audiencias (OID)'
    	]);

    	DB::table('categories')->insert([
        	'title' => 'Posicionamientos Defensores y Defensoras de las audiencias'
    	]);
    }
}
