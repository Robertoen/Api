<?php

use Illuminate\Database\Seeder;

class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
    	for ($i = 0; $i < 10; $i++) {
    		DB::table('alunos')->insert([
    			'nome' => str_random(10),
    			'email' => str_random(10) . '@gmail.com',
    			'senha' => bcrypt('123'),
    			'cpf' => str_random(11),
    			'rg' => str_random(10),
    			'dt_nasc' => '1990-03-23'
    		]);
    	}
    }
}
