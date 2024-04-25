@extends('dashboard.layoutDash.dashboard')

@section('title', 'Projetos')

@section('conteudo')

<div class="main">
    <div class="body">
        <div>

            <a href="{{ route('admin.projeto.index') }}" class="botao">Lista completa</a>

            <a href="#" class="botao">Novo projeto</a>

        </div>

        <div>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Funcionário</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data de Início</th>
                        <th scope="col">Data de Conclusão</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Status</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Desativar</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($ativos as $projeto)
                    <tr>
                        <th scope="row">{{ $projeto->idProjetos }}</th>
                        <td>{{ $projeto->idCliente }}</td>
                        <td>{{ $projeto->idFuncionario }}</td>
                        <td>{{ $projeto->descricaoProjeto }}</td>
                        <td>{{ $projeto->dataInicioProjeto }}</td>
                        <td>{{ $projeto->dataConclusaoProjeto }}</td>
                        <td>{{ $projeto->cidadeProjeto }}</td>
                        <td>{{ $projeto->statusProjeto }}</td>
                        <td class="editar"><a href="{{ route('admin.projeto.edit', $projeto->idProjetos) }}">Editar</a></td>
                        <td>
                            <form action="{{ route('admin.projeto.desativar', $projeto->idProjetos) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="desativar">Desativar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
