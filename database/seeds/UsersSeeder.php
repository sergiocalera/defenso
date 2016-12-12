<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Sergio Calera',
        	'email' => 'correo@correo.com',
        	'password' => bcrypt('hola')
    	]);
    	
    	DB::table('users')->insert([
            'name' => 'Otro Usuario',
            'email' => 'otroCorreo@correo.com',
            'password' => bcrypt('hola')
        ]);

    }
}