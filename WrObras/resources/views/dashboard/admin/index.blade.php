@extends('dashboard.layoutDash.dashboard')

@section('title', 'Administrador')

@section('conteudo')

        <div class="indexDash">

            <h2>Seja bem vindo @if (session('nome')){{ session('nome') }}@endif!</h2>


            <div class="somas">
                <div class="caixaSoma c1">
                    <div class="tituloSoma">
                        <h3>Faturamento</h3>
                    </div>

                    <div>
                        <p id="textoDigitado">R${{ $soma }}</p>
                    </div>

                </div>

                <div class="caixaSoma c2">
                    <div class="tituloSoma">
                        <h3> Despesas</h3>
                    </div>

                    <div>
                        <p id="textoDigitado">R${{ $Salario }}</p>
                    </div>

                </div>

                <div class="caixaSoma c3">

                    <div class="tituloSoma">
                        <h3>Lucro final</h3>
                    </div>
                    <div>
                        <p id="textoDigitado">R${{ $soma - $Salario }}</p>
                    </div>

                </div>



            </div>

        </div>


    </div>

    <script>
        // Texto que será "digitado"

        // Elemento onde o texto será exibido
        var textoElemento = document.getElementById("textoDigitado");

        // Função para adicionar cada caractere com um pequeno atraso
        function digitarTexto(texto, elemento) {
            var index = 0;
            var intervalo = setInterval(function() {
                elemento.innerHTML += texto.charAt(index);
                index++;
                if (index === texto.length) clearInterval(intervalo);
            }, 100); // Ajuste o tempo de intervalo conforme necessário
        }

        // Chama a função para digitar o texto
        digitarTexto(textoElemento);
    </script>
