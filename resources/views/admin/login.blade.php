@extends('layout')

@section('title', 'TESTE DAS DEUSAS')

@section('content')
    <div class="body text-center m-5">

        <div class="logo-container">
                
        </div>

        <h1 class="h3 mb-3 fw-normal">TESTE DAS DEUSAS</h1>

        <p class="fw-normal mb-5"><small class='text-muted'><em>Faça o login para acessar a área restrita.</em></small></p>

        <form class="form-signin m-5" action="{{ route('logar') }}" method="POST" autocomplete="off">
            @csrf

            <div class="mt-3">@include('includes.alerts')</div>
            <div class="form-floating my-5">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-5">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Senha" required>
                <label for="floatingPassword">Senha</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Acessar</button>
        </form>
        <p class="mt-5"><a href="{{ route('cliente.index') }}" target='_blank'>Acessar Questionário</a></p>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
@endsection

@section('js1')

@endsection

@section('js2')

@endsection
