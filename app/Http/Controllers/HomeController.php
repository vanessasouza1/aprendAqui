<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use App\Aluno;
use App\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('professor.home');
    }

    public function registerProfessor(Request $request){ //falta criar o request 
    	$professor = new Professor();    	
        $professor->nome = $request->nome;
        $professor->email = $request->email;
    	$professor->telefone = $request->telefone;
    	$professor->cpf = $request->cpf;
    	$professor->password = Hash::make($request->password);
    	$professor->endereco = $request->endereco;
    	$professor->habilidade = $request->habilidade;
    	$professor->save();

        /*return view('professor.home');*/
        return redirect('/')->with('messageProfessor','Professor Registrado com Sucesso !!');
        //return redirect()->intended('professor/getRegister');
    }

    
}
