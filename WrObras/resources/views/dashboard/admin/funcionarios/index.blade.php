@extends('dashboard.layoutDash.dashboard')

@section('title', 'Funcionários')

@section('conteudo')

    <div class="main">
        <div class="body">
            <div>

                <a href="{{ route('funcionariosAtivos') }}" class="botao">Lista de ativos</a>

                <a href="{{ route('admin.func.create') }}" class="botao">Novo funcionário</a>

            </div>

            <div>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Salário</th>
                            <th scope="col">Contratação</th>
                            <th scope="col">Status</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Desativar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($listaFunc as $func)
                            <tr>
                                <th scope="row">{{ $func->id }}</th>
                                <td>{{ $func->nomeFuncionario }}</td>
                                <td>{{ $func->cargoFuncionario }}</td>
                                <td>{{ $func->salarioFuncionario }}</td>
                                <td>{{ $func->contratacaoFuncionario }}</td>
                                <td>{{ $func->statusFuncionario }}</td>
                                <td class="editar"><a href="{{ route('admin.func.edit', $func->id) }}">Editar</a></td>
                                <td>
                                    <form action="{{ route('admin.func.desativar', $func->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="desativar"> Desativar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>

        </div>

    </div>
