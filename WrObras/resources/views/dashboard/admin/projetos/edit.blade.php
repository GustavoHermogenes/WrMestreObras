@extends('dashboard.layoutDash.dashboard')

@section('title', 'Edite um Projeto')

@section('conteudo')

    <section class="main">

        <div>
            <h2 class="titulo">Edite o Projeto</h2>
            <form action="{{ route('admin.projeto.update', $projeto->idProjetos) }}" method="POST"
                class="formulario">

                @csrf

                @method('PUT')


                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="idCliente">ID do Cliente:</label>
                        <input type="text" class="form-control" @error('idCliente') is-invalid @enderror
                            id="idCliente" name="idCliente" required value="{{ $projeto->idCliente }}"
                            maxlength="100">
                        @error('idCliente')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="idFuncionario">ID do Funcionário:</label>
                        <input type="text" class="form-control" @error('idFuncionario') is-invalid @enderror
                            id="idFuncionario" name="idFuncionario" required
                            value="{{ $projeto->idFuncionario }}" maxlength="100">
                        @error('idFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-group">
                    <label for="descricaoProjeto">Descrição do Projeto:</label>
                    <input type="text" class="form-control" @error('descricaoProjeto') is-invalid @enderror
                        id="descricaoProjeto" name="descricaoProjeto" required
                        value="{{ $projeto->descricaoProjeto }}" maxlength="255">
                    @error('descricaoProjeto')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="dataInicioProjeto">Data de Início:</label>
                        <input type="date" class="form-control" @error('dataInicioProjeto') is-invalid @enderror
                            id="dataInicioProjeto" name="dataInicioProjeto" required
                            value="{{ $projeto->dataInicioProjeto }}">
                        @error('dataInicioProjeto')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="dataConclusaoProjeto">Data de Conclusão:</label>
                        <input type="date" class="form-control" @error('dataConclusaoProjeto') is-invalid @enderror
                            id="dataConclusaoProjeto" name="dataConclusaoProjeto" required
                            value="{{ $projeto->dataConclusaoProjeto }}">
                        @error('dataConclusaoProjeto')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="cidadeProjeto">Cidade do Projeto:</label>
                    <input type="text" class="form-control" @error('cidadeProjeto') is-invalid @enderror
                        id="cidadeProjeto" name="cidadeProjeto" required
                        value="{{ $projeto->cidadeProjeto }}" maxlength="50">
                    @error('cidadeProjeto')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="statusProjeto">Status do Projeto:</label>
                    <select name="statusProjeto" @error('statusProjeto') is-invalid @enderror id="statusProjeto"
                        class="form-select" required>
                        <option value="{{ $projeto->statusProjeto }}" disabled="" selected=""
                            hidden="">{{ $projeto->statusProjeto }}</option>
                        <option value="ativo">Ativo</option>
                        <option value="inativo">Inativo</option>
                    </select>
                    @error('statusProjeto')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="botoes">
                    <div class="col-md-12">
                        <a href="{{ route('admin.projeto.index') }}"
                            class="btn btn-primary desativar">Voltar</a>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary enviar">Enviar</button>
                    </div>
                </div>
            </form>
        </div>

    </section>

@endsection
