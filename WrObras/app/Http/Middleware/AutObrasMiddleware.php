<?php

namespace App\Http\Middleware;

use App\Models\clientes;
use App\Models\equipes;
use App\Models\usuarios;
use Closure;
use Illuminate\Http\Request;

class AutObrasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $tipoUser)
    {


        $email = session('email');



    if ($email) {
        $usuario = usuarios::where('emailUsuario', $email)->first();

        if (!$usuario) {
            return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
        }

        $tipoUsuario = $usuario->tipo_usuario;

        $tipo = null; // Inicialize $tipo aqui

        if ($tipoUsuario instanceof clientes) {
            $tipo = 'cliente';
        } elseif ($tipoUsuario instanceof equipes) {
            $tipo = $tipoUsuario->cargoFuncionario;
        }
        // dd($tipo);

        if ($tipo === $tipoUser) {
            return $next($request);
        } else {
            return back()->withErrors(['email' => 'Acesso não permitido para esse perfil']);
        }
    }
    else {
        // Se o email não estiver presente na sessão, redirecione para a página de login
        return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
    }


    }
}
