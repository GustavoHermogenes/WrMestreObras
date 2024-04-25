<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\clientes;
use App\Models\contratos;
use App\Models\equipes;
use App\Models\projetos;
use App\Models\usuarios;

class AdminController extends Controller
{
    public function index()
    {

        //Recuperando o id do aluno na sessão
        $idFunc = session('id');
        $idUser = session('idUser');

        //Buscando o aluno pelo id no banco de dados
        $func = equipes::find($idFunc);
        $user = usuarios::find($idUser);

        if (!$func) {
            //se o aluno não for encontrado, você pode redirecionar, para uma página de erro ou fazer outra ação
            abort(404, 'administrador não encontrado');
        }


        return view('dashboard.admin.index');
    }



    public function indexFunc()
    {

        $idFunc = session('id');

        $func = equipes::find($idFunc);

        if (!$func) {
            abort(404, 'Funcionário não encontrado');
        }

        $func = equipes::where('statusFuncionario', 'ativo')->get();

        $listaFunc = equipes::all();

        // dd($listaFunc);

        return view('dashboard.admin.funcionarios.index', compact('listaFunc', 'func'));
    }



    public function funcionarioAtivo()
    {
        $ativos = equipes::where('statusFuncionario', 'ativo')->get();

        return view('dashboard.admin.funcionarios.funcionarioAtivo', ['listaFunc' => $ativos]);
    }





    public function createFunc()
    {

        $idFunc = session('id');
        $func = equipes::find($idFunc);

        if (!$func) {
            abort(404, 'Funcionário não encontrado');
        }
        return view('dashboard.admin.funcionarios.create');
    }


    public function cadFunc(Request $request)
    {
        $request->merge(['contratacaoFuncionario' => now()]);

        $request->validate([
            'nomeFuncionario'       => 'required|string|max:100',
            'contratacaoFuncionario'=> 'required|date',
            'salarioFuncionario'    => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'cargoFuncionario'      => 'required|string|max:50',
            'statusFuncionario'     => 'required|string|max:10',
        ]);

        // Obter o último funcionário ou definir o ID inicial como 0
        $ultimoFunc = equipes::latest('id')->first();
        $ultimoID = $ultimoFunc ? $ultimoFunc->id : 0;

        // Incrementar o ID para o próximo funcionário
        $proximoID = $ultimoID + 1;

        // Criar um novo objeto de funcionário e preencher com os dados do request
        $funcionario = new equipes();

        $funcionario->id                           = $proximoID;
        $funcionario->nomeFuncionario              = $request->input('nomeFuncionario');
        $funcionario->contratacaoFuncionario       = $request->input('contratacaoFuncionario');
        $funcionario->salarioFuncionario           = $request->input('salarioFuncionario');
        $funcionario->cargoFuncionario             = $request->input('cargoFuncionario');
        $funcionario->statusFuncionario            = $request->input('statusFuncionario');

        // Salvar o novo funcionário no banco de dados
        $funcionario->save();

        // Retornar uma resposta de sucesso ou redirecionar para uma página apropriada
        return redirect()->route('admin.func.index')->with('sucesso', 'Funcionário cadastrado com sucesso');
    }



    public function editFunc($id)
    {

        $idFunc = session('id');
        $func = equipes::find($id);



        return view('dashboard/admin/funcionarios/edit', compact('func'));
    }


    public function updateFunc(Request $request, $id)
    {

        $request->merge(['created_at' => now()]);

        $request->validate([
            'nomeFuncionario'           => 'required|string|max:100',
            'contratacaoFuncionario'    => 'required|date',
            'salarioFuncionario'        => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'cargoFuncionario'          => 'required|string|max:50',
            'statusFuncionario'         => 'required|in:ativo,inativo',
        ]);

        $func = equipes::findOrFail($id);

        $func->update($request->only([
            'nomeFuncionario',
            'contratacaoFuncionario',
            'salarioFuncionario',
            'cargoFuncionario',
            'statusFuncionario',
        ]));

        return redirect()->route('admin.func.index')->with('success', 'Funcionário atualizado com sucesso');
    }


    public function desativarFunc($id)
    {
        $func = equipes::findOrFail($id);
        $func->update(['statusFuncionario' => 'inativo']);

        return redirect()->route('admin.func.index')->with('success', 'Funcionário desativado com sucesso');
    }




//  CRUD cliente



public function indexCliente()
{

    $idFunc = session('id');

    $func = equipes::find($idFunc);

    if (!$func) {
        abort(404, 'Funcionário não encontrado');
    }

    $cliente = clientes::where('statusCliente', 'ativo')->get();

    $listaCliente = clientes::all();

    // dd($listaFunc);

    return view('dashboard.admin.clientes.index', compact('listaCliente', 'cliente'));
}

public function clienteAtivo()
    {
        $ativos = clientes::where('statusCliente', 'ativo')->get();

        return view('dashboard.admin.clientes.clienteAtivo', ['listaFunc' => $ativos]);
    }


public function createCliente()
{

    $idFunc = session('id');
    $func = equipes::find($idFunc);

    if (!$func) {
        abort(404, 'Cliente não encontrado');
    }
    return view('dashboard.admin.clientes.create', compact('func'));
}


public function cadCliente(Request $request)
{
    $request->merge(['created_at' => now()]);

    $request->validate([
    'nomeCliente'               => 'required|string|max:100',
    'numeroCliente'             => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
    'emailCliente'              => 'required|email', // Assuming email validation
    'enderecoCliente'           => 'required|string|max:50',
    'tipoServicoCliente'        => 'required|string|max:10',
    'observacoesServicoCliente' => 'required|string|max:255', // Adjusted max length
    'statusCliente'             => 'required|string|max:10',
    ]);

    // Obter o último funcionário ou definir o ID inicial como 0
    $ultimoCliente = clientes::latest('id')->first();
    $ultimoID = $ultimoCliente ? $ultimoCliente->id : 0;

    // Incrementar o ID para o próximo funcionário
    $proximoID = $ultimoID + 1;


    $cliente = new clientes();

    // Criar um novo objeto de funcionário e preencher com os dados do request
    $cliente->id                        = $proximoID; // Supondo que $proximoID seja definido anteriormente
    $cliente->nomeCliente               = $request->input('nomeCliente');
    $cliente->numeroCliente             = $request->input('numeroCliente');
    $cliente->emailCliente              = $request->input('emailCliente');
    $cliente->enderecoCliente           = $request->input('enderecoCliente');
    $cliente->tipoServicoCliente        = $request->input('tipoServicoCliente');
    $cliente->observacoesServicoCliente = $request->input('observacoesServicoCliente');
    $cliente->statusCliente             = $request->input('statusCliente');

    // Salve o cliente
    $cliente->save();

    // Retornar uma resposta de sucesso ou redirecionar para uma página apropriada
    return redirect()->route('admin.cliente.index')->with('sucess', 'Cliente cadastrado com sucesso');
}



public function editCliente($id)
{

    $idFunc = session('id');
    $func = equipes::find($idFunc);

    $cliente = clientes::findOrFail($id);


    return view('dashboard/admin/clientes/edit', compact('cliente','func'));
}


public function updateCliente(Request $request, $id)
{

    $request->merge(['created_at' => now()]);

    $request->validate([
    'nomeCliente'               => 'required|string|max:100',
    'numeroCliente'             => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
    'emailCliente'              => 'required|email', // Assuming email validation
    'enderecoCliente'           => 'required|string|max:50',
    'tipoServicoCliente'        => 'required|string|max:10',
    'observacoesServicoCliente' => 'required|string|max:255', // Adjusted max length
    'statusCliente'             => 'required|string|max:10',
    ]);

    $cliente = clientes::findOrFail($id);

    $cliente->update($request->only([
        'nomeCliente',
        'numeroCliente',
        'emailCliente',
        'enderecoCliente',
        'tipoServicoCliente',
        'observacoesServicoCliente',
        'statusCliente',
    ]));

    return redirect()->route('admin.cliente.index')->with('success', 'Cliente atualizado com sucesso');
}


public function desativarCliente($id)
{
    $cliente = clientes::findOrFail($id);
    $cliente->update(['statusCliente' => 'inativo']);

    return redirect()->route('admin.cliente.index')->with('success', 'Clientes desativado com sucesso');
}



// CRUD Contratos
public function indexContrato()
{

    $contrato = contratos::where('statusContrato', 'ativo')->get();

    $listaContrato = contratos::all();

    // dd($listaFunc);

    return view('dashboard.admin.contratos.index', compact('listaContrato', 'contrato'));
}



public function contratoAtivo()
{
    $ativos = contratos::where('statusContrato', 'ativo')->get();
    return view('dashboard.admin.contratos.contratoAtivo', ['ativos' => $ativos]);
}



public function createContrato()
{

    $idCont = session('id');
    $func = contratos::find($idCont);

    if (!$func) {
        abort(404, 'Contrato não encontrado');
    }
    return view('dashboard.admin.contratos.create', compact('func'));
}


public function cadContrato(Request $request)
{
    $request->merge(['created_at' => now()]);

    $request->validate([
        'idProjeto'                 => 'required|exists:projetos,idProjetos',
        'idCliente'                 => 'required|exists:clientes,id',
        'valorContrato'             => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
        'dataAssinaturaContrato'    => 'required|date',
        'statusContrato'             => 'required|string|max:10',
    ]);

    // Incrementar o ID para o próximo funcionário

    // Criar um novo objeto de funcionário e preencher com os dados do request
    $contrato = new contratos(); // Assuming 'Contrato' is the correct model name

    // Create a new contract object and fill it with data from the request
    $contrato->idProjeto = $request->input('idProjeto'); // Assigning the project's ID
    $contrato->idCliente = $request->input('idCliente'); // Assigning the client's ID
    $contrato->valorContrato = $request->input('valorContrato');
    $contrato->dataAssinaturaContrato = $request->input('dataAssinaturaContrato');
    $contrato->statusContrato = $request->input('statusContrato');

    // Save the contract
    $contrato->save();
    // Salve o cliente

    // Retornar uma resposta de sucesso ou redirecionar para uma página apropriada
    return redirect()->route('admin.contrato.index')->with('sucess', 'Contrato cadastrado com sucesso');
}



public function editContrato($id)
{

    $idFunc = session('id');
    $func = equipes::find($idFunc);

    $contrato = contratos::findOrFail($id);


    return view('dashboard/admin/contratos/edit', compact('contrato','func'));
}


public function updateContrato(Request $request, $id)
{
    $request->validate([
        'idProjeto'                 => 'required|exists:projetos,idProjetos',
        'idCliente'                 => 'required|exists:clientes,id',
        'valorContrato'             => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
        'dataAssinaturaContrato'    => 'required|date',
        'statusContrato'            => 'required|string|max:10|in:ativo,inativo',
    ]);

    $contrato = contratos::findOrFail($id);

    $contrato->update($request->only([
        'idProjeto',
        'idCliente',
        'valorContrato',
        'dataAssinaturaContrato',
        'statusContrato',
    ]));

    return redirect()->route('admin.contrato.index')->with('success', 'Contrato atualizado com sucesso');
}


public function desativarContrato($id)
{
    $contrato = contratos::findOrFail($id);
    $contrato->update(['statusContrato' => 'inativo']);

    return redirect()->route('admin.contrato.index')->with('success', 'Contrato desativado com sucesso');
}





// CRUD Projetos

public function indexProjeto()
{

    $projeto = projetos::where('statusProjeto', 'ativo')->get();

    $listaProjeto = projetos::all();

    // dd($listaFunc);

    return view('dashboard.admin.projetos.index', compact('listaProjeto', 'projeto'));
}

public function projetoAtivo()
{
    $ativos = projetos::where('statusProjeto', 'ativo')->get();
    return view('dashboard.admin.projetos.projetoAtivo', ['ativos' => $ativos]);
}



public function createProjeto()
{

    $idProjeto = session('id');
    $projeto = projetos::find($idProjeto);

    if (!$projeto) {
        abort(404, 'Projeto não encontrado');
    }
    return view('dashboard.admin.projetos.create', compact('projeto'));
}


public function cadProjeto(Request $request)
{
    $request->merge(['created_at' => now()]);

    $request->validate([
        'idFuncionario'             => 'required|exists:projetos,idFuncionario',
        'idCliente'                 => 'required|exists:projetos,idCliente',
        'descricaoProjeto'          => 'required|string|max:255',
        'dataInicioProjeto'         => 'required|date',
        'dataConclusaoProjeto'      => 'required|date|after:dataInicioProjeto',
        'cidadeProjeto'             => 'required|string|max:100',
        'statusProjeto'             => 'required|string|max:10',
    ]);

    // Obter o último funcionário ou definir o ID inicial como 0
    $ultimoProjeto = projetos::latest('idProjetos')->first();
    $ultimoID = $ultimoProjeto ? $ultimoProjeto->id : 0;

    // Incrementar o ID para o próximo funcionário

    // Criar um novo objeto de funcionário e preencher com os dados do request
    $projeto = new projetos(); // Assuming 'Projetos' is the correct model name

    // Create a new project object and fill it with data from the request
    $projeto->idCliente = $request->input('idCliente');
    $projeto->idFuncionario = $request->input('idFuncionario');
    $projeto->descricaoProjeto = $request->input('descricaoProjeto');
    $projeto->dataInicioProjeto = $request->input('dataInicioProjeto');
    $projeto->dataConclusaoProjeto = $request->input('dataConclusaoProjeto');
    $projeto->cidadeProjeto = $request->input('cidadeProjeto');
    $projeto->statusProjeto = $request->input('statusProjeto');


    // Save the contract
    $projeto->save();
    // Salve o cliente

    // Retornar uma resposta de sucesso ou redirecionar para uma página apropriada
    return redirect()->route('admin.projeto.index')->with('sucess', 'Projeto cadastrado com sucesso');
}



public function editProjeto($id)
{
    $idFunc = session('id');
    $func = equipes::find($idFunc);

    $projeto = projetos::findOrFail($id);

    return view('dashboard/admin/projetos/edit', compact('projeto', 'func'));
}



public function updateProjeto(Request $request, $id)
{
    $request->merge(['updated_at' => now()]); // Update the updated_at timestamp

    $request->validate([
        'idCliente'                 => 'required|exists:clientes,id',
        'idFuncionario'             => 'required|exists:equipes,id', // Assuming there's a "funcionarios" table
        'descricaoProjeto'          => 'required|string|max:255',
        'dataInicioProjeto'         => 'required|date',
        'dataConclusaoProjeto'      => 'required|date|after_or_equal:dataInicioProjeto', // Ensure completion date is after or equal to start date
        'cidadeProjeto'             => 'required|string|max:50',
        'statusProjeto'       => 'required|string|max:10',
    ]);

    $projeto = projetos::findOrFail($id);

    $projeto->update($request->only([
        'idCliente',
        'idFuncionario',
        'descricaoProjeto',
        'dataInicioProjeto',
        'dataConclusaoProjeto',
        'cidadeProjeto',
        'statusProjeto',
    ]));

    return redirect()->route('admin.projeto.index')->with('success', 'Projeto atualizado com sucesso');
}



public function desativarProjeto($id)
{
    $projeto = projetos::findOrFail($id);
    $projeto->update(['statusProjeto' => 'inativo']);

    return redirect()->route('admin.projeto.index')->with('success', 'Projeto desativado com sucesso');
}



public function soma()
{
    $soma = null;
    $soma = contratos::sum('valorContrato');

    $Salario = equipes::sum('salarioFuncionario');


    // dd($soma);

    return view('dashboard.admin.index', compact('soma' , 'Salario'));

}


}
