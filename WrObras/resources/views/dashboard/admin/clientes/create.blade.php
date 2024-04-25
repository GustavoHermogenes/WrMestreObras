@extends('dashboard.layoutDash.dashboard')

@section('title', 'Novo Cliente')

@section('conteudo')

    <section class="main">

        <div>
            <h2 class="titulo">Cadastro de cliente</h2>
            <form action="{{ route('admin.cliente.cad') }}" method="POST" class="formulario">

                @csrf

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nomeCliente">Nome do cliente:</label>
                        <input type="text" class="form-control" @error('nomeCliente') is-invalid @enderror id="nomeCliente"
                            name="nomeCliente" required value="{{ old('nomeCliente') }}" maxlength="100">
                        @error('nomeCliente')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="numeroCliente">Número cliente:</label>
                        <input type="number" class="form-control" @error('numeroCliente') is-invalid @enderror
                            id="numeroCliente" name="numeroCliente" value="{{ old('numeroCliente') }}" required>
                        @error('numeroCliente')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-group">
                    <label for="emailCliente">Email cliente:</label>
                    <input type="email" class="form-control" @error('emailCliente') is-invalid @enderror id="emailCliente"
                        name="emailCliente" value="{{ old('emailCliente') }}" required>
                    </select>

                    @error('emailCliente')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="enderecoCliente">Endereço cliente:</label>
                    <input type="text" class="form-control" @error('enderecoCliente') is-invalid @enderror
                        value="{{ old('enderecoCliente') }}" id="enderecoCliente" name="enderecoCliente" required>
        
                    @error('enderecoCliente')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tipoServicoCliente">Serviço cliente:</label>
                    <input type="text" class="form-control" @error('tipoServicoCliente') is-invalid @enderror
                        value="{{ old('tipoServicoCliente') }}" id="tipoServicoCliente" name="tipoServicoCliente" required>
        
                    @error('tipoServicoCliente')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="observacoesServicoCliente">Observações:</label>
                    <input type="text" class="form-control" @error('observacoesServicoCliente') is-invalid @enderror
                        value="{{ old('observacoesServicoCliente') }}" id="observacoesServicoCliente"
                        name="observacoesServicoCliente" required>
        
                    @error('observacoesServicoCliente')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="statusCliente">Status:</label>
                    <select name="statusCliente" @error('statusCliente') is-invalid @enderror id="statusCliente"
                        class="form-select" required>
                        <option value="{{ old('statusCliente') }}" disabled="" selected="" hidden="">
                            Insira o status</option>
                        <option value="ativo">ativo</option>
                        <option value="inativo">inativo</option>
                    </select>
        
                    @error('statusCliente')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
        


                <div class="botoes">
                    <div class="col-md-12">
                        <a href="{{ route('admin.cliente.index') }}" class="btn btn-primary desativar">voltar</a>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary enviar">enviar</button>
                    </div>
                </div>
            </form>
        </div>


    </section>
