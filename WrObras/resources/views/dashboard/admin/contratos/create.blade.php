@extends('dashboard.layoutDash.dashboard')

@section('title', 'Novo Contrato')

@section('conteudo')

    <section class="main">

        <div>
            <h2 class="titulo">Cadastro de Contrato</h2>
            <form action="{{ route('admin.contrato.cad') }}" method="POST" class="formulario">

                @csrf

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="idProjeto">Projeto Relacionado:</label>
                        <input type="text" class="form-control" @error('idProjeto') is-invalid @enderror placeholder="Insira o id do projeto: "
                            id="idProjeto" name="idProjeto" required value="{{ old('idProjeto') }}"
                            maxlength="100">
                        @error('idProjeto')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dataAssinaturaContrato">Assinatura:</label>
                        <input type="date" class="form-control" @error('dataAssinaturaContrato') is-invalid @enderror
                            id="dataAssinaturaContrato" name="dataAssinaturaContrato"
                            value="{{ old('dataAssinaturaContrato') }}" required>
                        @error('dataAssinaturaContrato')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="form-group">
                    <label for="idCliente">Cliente Relacionado:</label>
                    <input type="text" class="form-control" @error('idCliente') is-invalid @enderror placeholder="Insira o id do cliente: "
                        id="idCliente" name="idCliente" required value="{{ old('idCliente') }}"
                        maxlength="100">
                    @error('idCliente')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="valorContrato">Valor do contrato:</label>
                    <input type="number" class="form-control" @error('valorContrato') is-invalid @enderror placeholder="Insira o valor do contrato: "
                        value="{{ old('valorContrato') }}" id="valorContrato" name="valorContrato" required
                        step="0.01">

                    @error('valorContrato')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="statusContrato">Status:</label>
                    <select name="statusContrato" @error('statusContrato') is-invalid @enderror id="statusContrato"
                        class="form-select" required>
                        <option value="{{ old('statusContrato') }}" disabled="" selected="" hidden="">
                            Selecione o status</option>
                        <option value="ativo">ativo</option>
                        <option value="inativo">inativo</option>
                    </select>
                    @error('statusContrato')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>


                <div class="botoes">
                    <div class="col-md-12">
                        <a href="{{ route('admin.func.index') }}" class="btn btn-primary desativar">voltar</a>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary enviar">enviar</button>
                    </div>
                </div>
            </form>
        </div>

    </section>

