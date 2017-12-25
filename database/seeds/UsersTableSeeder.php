<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Criando o primeiro usuário padrão
        User::create([
        	'name' 		=> 'Carlos da Silva Soares',
        	'email' 	=> 'carlos@enium.com.br',
        	'password' 	=> bcrypt('cs04091986'),
        ]);
    }
}
