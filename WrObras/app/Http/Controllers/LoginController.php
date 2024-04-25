<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\equipes;
use App\Models\usuario;
use App\Models\usuarios;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login');
    }

    public function autenticar(Request $request){

        $regras = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $msg = [
            'email.required' => 'O campo de e-mail é obrigatório',
            'email.email'    => 'O e-mail informado não está correto',
            'password.required' => 'O campo de senha é obrigatório'
        ];

        $request->validate($regras, $msg);

        $email = $request->get('email');
        $senha = $request->get('password');

        // echo "E-mail: $email | Senha: $senha ";
        // echo "<br>";

        $usuario = usuarios::where('emailUsuario', $email)->first();

        if(!$usuario){
            return back()->withErrors(['email' => 'O e-mail informado não está cadastrado!']);
        }

        if ($usuario->senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta']);
        }


        $tipoUsuario = $usuario->tipo_usuario;

        session([
            'email' => $usuario->emailUsuario,
        ]);


        if($tipoUsuario instanceof clientes){

            session([
                'id'            =>$tipoUsuario->id,
                'nome'          =>$tipoUsuario->nomeCliente,
                'tipo_usuario'  => 'cliente',
            ]);

            return redirect()->route('dashboard.cliente');
            // dd($$tipoUsuario);

        }elseif($tipoUsuario instanceof equipes){

            if($tipoUsuario->cargoFuncionario == 'admin') {

            // $tipo = 'admin';


                session([
                    'id'                =>$tipoUsuario->id,
                    'nome'              =>$tipoUsuario->nomeFuncionario,
                    'tipo_usuario'      => 'admin',
                ]);

                return redirect()->route('dashboard.admin');

            } elseif ($tipoUsuario->cargoFuncionario =='pedreiro') {

            // $tipo = 'instrutor';


                session([
                    'id'                =>$tipoUsuario->id,
                    'nome'              =>$tipoUsuario->cargoFuncionario,
                    'tipo_usuario'      =>'pedreiro',
                ]);

                return redirect()->route('dashboard.pedreiro');

            }
        }

        return back()->withErrors(['email' => 'Erro desconhecido de autenticação']);

    }

}
