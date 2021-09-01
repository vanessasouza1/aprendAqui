<?php

use Illuminate\Database\Seeder;
use App\Professor;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professor = new Professor();
    	 
        $professor->nome = "Professor";
        $professor->email = "professor@gmail.com";
    	$professor->telefone = "56566";
    	$professor->cpf = "58565";
    	$professor->password = "542145";
    	$professor->endereco = "4545727";
    	$professor->habilidade = "yutred";

    	$professor->save();
    }
}
