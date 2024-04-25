@extends('dashboard.layoutDash.dashboard')

@section('title', 'Novo Funcionário')

@section('conteudo')

    <section class="main">

        <div>
            <h2 class="titulo">Cadastro de Funcionário</h2>
            <form action="{{ route('admin.func.cad') }}" method="POST" class="formulario">

                @csrf

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nomeFuncionario">Nome do Funcionário:</label>
                        <input type="text" class="form-control" @error('nomeFuncionario') is-invalid @enderror placeholder="Insira o nome: "
                            id="nomeFuncionario" name="nomeFuncionario" required value="{{ old('nomeFuncionario') }}"
                            maxlength="100">
                        @error('nomeFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contratacaoFuncionario">Data de Contratação:</label>
                        <input type="date" class="form-control" @error('contratacaoFuncionario') is-invalid @enderror
                            id="contratacaoFuncionario" name="contratacaoFuncionario"
                            value="{{ old('contratacaoFuncionario') }}" required>
                        @error('contratacaoFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-group">
                    <label for="cargoFuncionario">Cargo:</label>
                    <select name="cargoFuncionario" @error('cargoFuncionario') is-invalid @enderror id="cargoFuncionario"
                        class="form-select" required>
                        <option value="{{ old('cargoFuncionario') }}" disabled="" selected="" hidden="">
                            Selecione o cargo</option>
                        <option value="admin">Administrador</option>
                        <option value="instrutor">Pedreiro</option>
                    </select>

                    @error('cargoFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="salarioFuncionario">Salário:</label>
                    <input type="number" class="form-control" @error('salarioFuncionario') is-invalid @enderror placeholder="Insira o salário: "
                        value="{{ old('salarioFuncionario') }}" id="salarioFuncionario" name="salarioFuncionario" required
                        step="0.01">

                    @error('salarioFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="statusFuncionario">Status:</label>
                    <select name="statusFuncionario" @error('statusFuncionario') is-invalid @enderror id="statusFuncionario"
                        class="form-select" required>
                        <option value="{{ old('statusFuncionario') }}" disabled="" selected="" hidden="">
                            Selecione o status</option>
                        <option value="ativo">ativo</option>
                        <option value="inativo">inativo</option>
                    </select>
                    @error('statusFuncionario')
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
