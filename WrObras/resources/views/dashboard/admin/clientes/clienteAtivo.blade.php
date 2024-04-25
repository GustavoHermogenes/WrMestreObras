@extends('dashboard.layoutDash.dashboard')

@section('title', 'Clientes Ativos')

@section('conteudo')

    <div class="main">
        <div class="body">
            <div>

                <a href="{{ route('admin.cliente.index') }}" class="botao">Lista completa</a>

                <a href="{{ route('admin.cliente.create') }}" class="botao">Novo cliente</a>

            </div>

            <div>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Número</th>
                            <th scope="col">Email</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Serviço</th>
                            <th scope="col">Status</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Desativar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($Ativos as $cliente) <!-- Alterado de $listaCliente para $Ativos -->
                            <tr>
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente->nomeCliente }}</td>
                                <td>{{ $cliente->numeroCliente }}</td>
                                <td>{{ $cliente->emailCliente }}</td>
                                <td>{{ $cliente->enderecoCliente }}</td>
                                <td>{{ $cliente->tipoServicoCliente }}</td>
                                <td>{{ $cliente->statusCliente }}</td>
                                <td class="editar"><a href="{{ route('admin.cliente.edit', $cliente->id) }}">Editar</a></td>
                                <td>
                                    <form action="{{ route('admin.cliente.desativar', $cliente->id) }}" method="POST">
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

@endsection
