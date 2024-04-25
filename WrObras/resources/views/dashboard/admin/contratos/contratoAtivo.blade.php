@extends('dashboard.layoutDash.dashboard')

@section('title', 'Contratos')

@section('conteudo')

    <div class="main">
        <div class="body">
            <div>

                <a href="{{ route('admin.contrato.index') }}" class="botao">Lista completa</a>

                <a href="#" class="botao">Novo contrato</a>

            </div>

            <div>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Projeto</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Assinatura</th>
                            <th scope="col">Status</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Desativar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ativos as $contrato)
                            <tr>
                                <th scope="row">{{ $contrato->idContrato }}</th>
                                <td>{{ $contrato->idProjeto }}</td>
                                <td>{{ $contrato->idCliente }}</td>
                                <td>{{ $contrato->valorContrato }}</td>
                                <td>{{ $contrato->dataAssinaturaContrato }}</td>
                                <td>{{ $contrato->statusContrato }}</td>
                                <td class="editar"><a
                                        href="{{ route('admin.contrato.edit', $contrato->idContrato) }}">Editar</a></td>
                                <td>
                                    <form action="{{ route('admin.contrato.desativar', $contrato->idContrato) }}"
                                        method="POST">
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
