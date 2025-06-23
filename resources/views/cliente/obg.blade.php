@extends('layout')

@section('title', 'TESTE DAS DEUSAS')

@section('content')

    @include('cliente.nav')

    <section id="section16" class="my-3" style="color:indigo">
        <div class="card">
            <div class="p-3 text-center">
                <i class="bi bi-emoji-laughing" style="font-size: 5rem;"></i>
                <h1 class="display-5 fw-bold">Teste Finalizado com Sucesso</h1>
                <div class="col-lg-9 mx-auto">

                    <p class="lead mb-4">Em breve você receberá o link do resultado deste teste no email informado.</p>
                    <p class="lead mb-4">Ao acessar seu email se não encontrar na Caixa de Entrada, verefique se o email com a resposta do teste não está no Lixo Eletrônico ou em Spam.</p>

                    <hr>

                    <p class="lead mb-4">Musa, é muito natural que acessemos mais o lado sombra (negativo) das Deusas porque não temos esses poderes equilibrados em nós e porque não sabemos usar nosso poder mental, vivemos no automático!</p>
                    <p class="lead mb-4">Por isso te pergunto, quer saber mais e aprender como usar esses poderes dentro de você e sua mente a seu favor não mais contra?</p>

                    {{-- <p class="lead mb-4"><a class="btn btn-success btn-lg mx-5" href="https://wa.me/5548991497040" role="button"
                            aria-disabled="true" style="background-color:indigo"><i class="bi bi-whatsapp"></i> Saiba Mais </a></p> --}}
                    <p class="lead mb-4"><a class="btn btn-success btn-lg mx-5" href="https://musadamente.com.br/bkp-antigo/agendamento-tdm/obrigado-por-agendar-tdm/" role="button"
                        aria-disabled="true" style="background-color:indigo"><i class="bi bi-whatsapp"></i> Saiba Mais </a></p>

                </div>
            </div>
        </div>
    </section>

@stop

@section('js1')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/app.js"></script>
@stop

@section('js2')

@stop

@section('css')
    <link rel="stylesheet" href="assets/css/app.css" />
@stop
