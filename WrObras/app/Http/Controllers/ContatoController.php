<?php

namespace App\Http\Controllers;

use App\Mail\contatoEmail;
use App\Models\Contato;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato');
    }

    public function salvarNoBanco(Request $request)
    {
        $dados = $request->all();

        $validarDados = Validator::make($dados, [
            'nomeContato'    => 'required|max:100',
            'emailContato'   => 'required|email|max:100',
            'assuntoContato' => 'required|max:100',
            'enderecoContato'=> 'required|max:200',
            'mensContato'    => 'required'
        ]);

        if ($validarDados->fails()) {
            return response()->json(['errors' => $validarDados->errors()], 422);
        }
        else {

            $contato = Contato::create($validarDados->validated());

            // Por email
            Mail::to('cybercompany@smpsistema.com.br')->send(new contatoEmail($contato));

            return response()->json(['success' => 'Email registrado com sucesso']);
        }

    }

}
