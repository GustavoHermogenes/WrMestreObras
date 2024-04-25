@extends('layout.layout')

@section('title', 'Login')

<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

@section('conteudo')

<body class="bodyLogin">

    <form action="{{ route('login') }}" method="POST" class="login">
        @csrf

        <div class="caixaLogin">

            <div class="logo">

                <img src="{{ asset('assets/img/logo/1.png') }}" alt="">

            </div>

            <div class="input">

                <div>

                    <div>
                        <input type="text" placeholder="Digite seu email" name="email" id="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu email'"
                            value="{{ old('email') }}"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i>
                    </div>
                    <span class="error">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>

                    <div>
                        <input type="password" placeholder="Digite sua senha" name="password" id="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua senha'"
                            value="{{ old('password') }}"><i class="fa-regular fa-lock" style="color: #ffffff;"></i>
                    </div>
                   <span class="error">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>

                </div>

                <input type="submit" value="Login">

            </div>

        </div>

    </form>

</body>

