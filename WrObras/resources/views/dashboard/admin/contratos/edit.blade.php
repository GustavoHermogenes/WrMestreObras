@extends('dashboard.layoutDash.dashboard')

@section('title', 'Edite um Contrato')

@section('conteudo')

    <section class="main">

        <div>
            <h2 class="titulo">Edite o Contrato</h2>
            <form action="{{ route('admin.contrato.update', $contrato->idContrato) }}" method="POST"
                class="formulario">

                @csrf

                @method('PUT')


                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="idProjeto">ID do Projeto:</label>
                        <input type="text" class="form-control" @error('idProjeto') is-invalid @enderror
                            id="idProjeto" name="idProjeto" required value="{{ $contrato->idProjeto }}"
                            maxlength="100">
                        @error('idProjeto')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="idCliente">ID do Cliente:</label>
                        <input type="text" class="form-control" @error('idCliente') is-invalid @enderror
                            id="idCliente" name="idCliente" required
                            value="{{ $contrato->idCliente }}" maxlength="100">
                        @error('idCliente')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-group">
                    <label for="valorContrato">Valor do Contrato:</label>
                    <input type="number" class="form-control" @error('valorContrato') is-invalid @enderror
                        id="valorContrato" name="valorContrato" required
                        value="{{ $contrato->valorContrato }}">
                    @error('valorContrato')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="dataAssinaturaContrato">Data de Assinatura:</label>
                        <input type="date" class="form-control" @error('dataAssinaturaContrato') is-invalid @enderror
                            id="dataAssinaturaContrato" name="dataAssinaturaContrato" required
                            value="{{ $contrato->dataAssinaturaContrato }}">
                        @error('dataAssinaturaContrato')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="statusContrato">Status do Contrato:</label>
                        <select name="statusContrato" @error('statusContrato') is-invalid @enderror
                            id="statusContrato" class="form-select" required>
                            <option value="{{ $contrato->statusContrato }}" disabled="" selected=""
                                hidden="">{{ $contrato->statusContrato }}</option>
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
                        @error('statusContrato')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="botoes">
                    <div class="col-md-12">
                        <a href="{{ route('admin.contrato.index') }}"
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
