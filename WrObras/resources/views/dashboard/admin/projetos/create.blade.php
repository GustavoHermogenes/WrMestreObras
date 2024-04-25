@extends('dashboard.layoutDash.dashboard')

@section('title', 'Novo Projeto')

@section('conteudo')

<section class="main">

    <div>
        <h2 class="titulo">Cadastro de Projeto</h2>
        <form action="{{ route('admin.projeto.cad') }}" method="POST" class="formulario">

            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="idCliente">Cliente Relacionado:</label>
                    <input type="text" class="form-control" @error('idCliente') is-invalid @enderror placeholder="Insira o ID do cliente: "
                        id="idCliente" name="idCliente" required value="{{ old('idCliente') }}"
                        maxlength="100">
                    @error('idCliente')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="idFuncionario">Funcionário Responsável:</label>
                    <input type="text" class="form-control" @error('idFuncionario') is-invalid @enderror placeholder="Insira o ID do funcionário: "
                        id="idFuncionario" name="idFuncionario" required value="{{ old('idFuncionario') }}"
                        maxlength="100">
                    @error('idFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="descricaoProjeto">Descrição do Projeto:</label>
                <input type="text" class="form-control" @error('descricaoProjeto') is-invalid @enderror placeholder="Insira a descrição do projeto"
                    id="descricaoProjeto" name="descricaoProjeto" required value="{{ old('descricaoProjeto') }}"
                    maxlength="255">
                @error('descricaoProjeto')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dataInicioProjeto">Data de Início:</label>
                    <input type="date" class="form-control" @error('dataInicioProjeto') is-invalid @enderror
                        id="dataInicioProjeto" name="dataInicioProjeto" value="{{ old('dataInicioProjeto') }}"
                        required>
                    @error('dataInicioProjeto')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="dataConclusaoProjeto">Data de Conclusão:</label>
                    <input type="date" class="form-control" @error('dataConclusaoProjeto') is-invalid @enderror
                        id="dataConclusaoProjeto" name="dataConclusaoProjeto" value="{{ old('dataConclusaoProjeto') }}"
                        required>
                    @error('dataConclusaoProjeto')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="cidadeProjeto">Cidade:</label>
                <input type="text" class="form-control" @error('cidadeProjeto') is-invalid @enderror placeholder="Insira a cidade do projeto"
                    id="cidadeProjeto" name="cidadeProjeto" required value="{{ old('cidadeProjeto') }}"
                    maxlength="100">
                @error('cidadeProjeto')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="statusProjeto">Status:</label>
                <select name="statusProjeto" @error('statusProjeto') is-invalid @enderror id="statusProjeto"
                    class="form-select" required>
                    <option value="{{ old('statusProjeto') }}" disabled="" selected="" hidden="">
                        Selecione o status</option>
                    <option value="ativo">ativo</option>
                    <option value="inativo">inativo</option>
                </select>
                @error('statusProjeto')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="botoes">
                <div class="col-md-12">
                    <a href="{{ route('admin.projeto.index') }}" class="btn btn-primary desativar">Voltar</a>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary enviar">Enviar</button>
                </div>
            </div>
        </form>
    </div>

</section>

@endsection
