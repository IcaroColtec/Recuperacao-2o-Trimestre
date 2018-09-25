<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\cadastro;

class UsuarioController extends Controller
{
    
    private $cadastro;

    public function __construct(cadastro $cadastro){
        $this->cadastro=$cadastro;
    }

    public function registrar()
    {
        return view('cadastro');
    }

    public function home()
    {
        return view('resposta');
    }

    public function GuardarRegistro(request $request){

        $nome=$request->input('nome');
        $email=$request->input('email');
        $senha=htmlspecialchars($request->input('senha'));

        $this->validate($request, $this->cadastro->rules, $this->cadastro->messages);

        $insert = $this->cadastro->create([

            'name'      => $nome,
            'e-mail'    => $email,
            'password'  => $senha,

        ]);
        
        if($insert)
            return redirect('/');
        else
            return redirect()->back();
    }

    public function ConfereLogin(request $request){

        return redirect('/Home');
    

        // $login=$request->input('login');
        // $senha=htmlspecialchars($request->input('senha'));

        // $verifica = DB::table('cadastros')->selectRaw('e-mail * ? and password * ?', [$login, $senha])->get();
        // dd($verifica);

        // if($verifica)
        //      
        // else
        //      die();

        
    }

}

