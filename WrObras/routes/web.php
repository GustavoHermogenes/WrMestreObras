<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedreiroController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('servico', [ServicoController::class, 'index'])->name('servico');
Route::get('sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('portfolio', [PortfolioController::class,'index'])->name('potfolio');



Route::get('contato', [ContatoController::class, 'index'])->name('contato');
Route::post('contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'autenticar'])->name('login');




Route::middleware(['autenticacao:admin'])->group(function (){

    Route::get('dashboard/admin/', [adminController::class,'index'])->name('dashboard.admin');


    // SOMA

    Route::get('/dashboard/admin', [AdminController::class,'soma'])->name('dashboard.admin');


    // CRUD Funcionários

    Route::get('dashboard/admin/funcionarios/funcionarioAtivo', [AdminController::class, 'funcionarioAtivo'])->name('funcionariosAtivos');


    Route::get('dashboard/admin/funcionario', [adminController::class, 'indexFunc'])->name('admin.func.index');
    Route::get('dashboard/admin/funcionarios/create', [adminController::class, 'createFunc'])->name('admin.func.create');
    Route::post('dashboard/admin/funcionarios', [adminController::class, 'cadFunc'])->name('admin.func.cad');
    Route::get('dasboard/admin/funcionarios/{id}/edit', [adminController::class, 'editFunc'])->name('admin.func.edit');
    Route::put('dashboard/admin/funcionarios/{id}',[adminController::class, 'updateFunc'])->name('admin.func.update');
    Route::put('dashboard/admin/funcionarios/{id}/desativar', [adminController::class, 'desativarFunc'])->name('admin.func.desativar');


    // CRUD CLientes

    Route::get('/dashboard/admin/clientes/clientesAtivos', [AdminController::class, 'clienteAtivo'])->name('clientesAtivos');



    Route::get('dashboard/admin/clientes', [adminController::class, 'indexCliente'])->name('admin.cliente.index');
    Route::get('dashboard/admin/clientes/create', [adminController::class, 'createCliente'])->name('admin.cliente.create');
    Route::post('dashboard/admin/clientes', [adminController::class, 'cadCliente'])->name('admin.cliente.cad');
    Route::get('dasboard/admin/clientes/{id}/edit', [adminController::class, 'editCliente'])->name('admin.cliente.edit');
    Route::put('dashboard/admin/clientes/{id}',[adminController::class, 'updateCliente'])->name('admin.cliente.update');
    Route::put('dashboard/admin/clientes/{id}/desativar', [adminController::class, 'desativarCliente'])->name('admin.cliente.desativar');




    // CRUD Contratos

    Route::get('dashboard/admin/contrato/contratoAtivo', [AdminController::class, 'contratoAtivo'])->name('contratosAtivos');

    Route::get('dashboard/admin/contratos', [AdminController::class, 'indexContrato'])->name('admin.contrato.index');
    Route::get('dashboard/admin/contratos/create', [AdminController::class, 'createContrato'])->name('admin.contrato.create');
    Route::post('dashboard/admin/contratos', [AdminController::class, 'cadContrato'])->name('admin.contrato.cad');
    Route::get('dasboard/admin/contratos/{id}/edit', [AdminController::class, 'editContrato'])->name('admin.contrato.edit');
    Route::put('dashboard/admin/contratos/{id}',[AdminController::class, 'updateContrato'])->name('admin.contrato.update');
    Route::put('dashboard/admin/contratos/{id}/desativar', [AdminController::class, 'desativarContrato'])->name('admin.contrato.desativar');



    // CRUD Projetos


    Route::get('dashboard/admin/projeto/projetoAtivo', [AdminController::class, 'projetoAtivo'])->name('projetosAtivos');

    Route::get('dashboard/admin/projetos', [AdminController::class, 'indexProjeto'])->name('admin.projeto.index');
    Route::get('dashboard/admin/projetos/create', [AdminController::class, 'createProjeto'])->name('admin.projeto.create');
    Route::post('dashboard/admin/projetos', [AdminController::class, 'cadProjeto'])->name('admin.projeto.cad');
    Route::get('dasboard/admin/projetos/{id}/edit', [AdminController::class, 'editProjeto'])->name('admin.projeto.edit');
    Route::put('dashboard/admin/projetos/{id}',[AdminController::class, 'updateProjeto'])->name('admin.projeto.update');
    Route::put('dashboard/admin/projetos/{id}/desativar', [AdminController::class, 'desativarProjeto'])->name('admin.projeto.desativar');



});




Route::middleware(['autenticacao:cliente'])->group(function(){

    Route::get('dashbord/cliente', [ClienteController::class, 'index'])->name('dashboard.cliente');

});

Route::middleware(['autenticacao:pedreiro'])->group(function(){
    Route::get('dashboard/pedreiro', [PedreiroController::class, 'index'])->name('dashboard.pedreiro');
});


Route::get('sair', function(){
    session()->flush();
    return redirect('/');
})->name('sair');
