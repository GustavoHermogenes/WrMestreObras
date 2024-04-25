@extends('dashboard.layoutDash.dashboard')

@section('title', 'Edite um Funcionário')

@section('conteudo')

    <section class="main">

        <div>
            <h2 class="titulo">Edite o Funcionário <span>"{{ $func->nomeFuncionario }}"</span> </h2>
            <form action="{{ route('admin.func.update', $func->id) }}" method="POST" class="formulario">

                @csrf

                @method('PUT')


                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nomeFuncionario">Nome do Funcionário:</label>
                        <input type="text" class="form-control" @error('nomeFuncionario') is-invalid @enderror
                            id="nomeFuncionario" name="nomeFuncionario" required value="{{ $func->nomeFuncionario }}"
                            maxlength="100">
                        @error('nomeFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contratacaoFuncionario">Data de Contratação:</label>
                        <input type="date" class="form-control" @error('contratacaoFuncionario') is-invalid @enderror
                            id="contratacaoFuncionario" name="contratacaoFuncionario"
                            value="{{ $func->contratacaoFuncionario }}" required>
                        @error('contratacaoFuncionario')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-group">
                    <label for="cargoFuncionario">Cargo:</label>
                    <select name="cargoFuncionario" @error('cargoFuncionario') is-invalid @enderror id="cargoFuncionario"
                        class="form-select" required>
                        <option value="{{ $func->cargoFuncionario }}" disabled="" selected="" hidden="">{{ $func->cargoFuncionario }}</option>
                        <option value="admin">Administrador</option>
                        <option value="pedreiro">Pedreiro</option>
                    </select>

                    @error('cargoFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="salarioFuncionario">Salário:</label>
                    <input type="number" class="form-control" @error('salarioFuncionario') is-invalid @enderror
                        value="{{ $func->salarioFuncionario }}" id="salarioFuncionario" name="salarioFuncionario" required
                        step="0.01">

                    @error('salarioFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label for="statusFuncionario">Status:</label>
                    <select name="statusFuncionario" @error('statusFuncionario') is-invalid @enderror
                        id="statusFuncionario" class="form-select" required>
                        <option value="{{ $func->statusFuncionario }}" disabled="" selected="" hidden="">{{ $func->statusFuncionario }}</option>
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
