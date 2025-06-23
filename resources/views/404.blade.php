@extends('layout')

@section('title', 'Error')

@section('content')

    <section class="content container text-center py-5">

        <div class="error-page container text-center py-5">

            <h2 class="headline text-danger py-3"><i class="fas fa-exclamation-triangle text-warning"></i> Erro</h2>

            <div class="error-content pb-5">
                <h3> Ops! Algo está errado!</h3>
                <p class="lead py-3">Tente novamente mais tarde. <br>
                    No momento não foi possível encontrar a página que você estava procurando.<br></p>
                <p>Enquanto isso, você pode <a href="">retornar a Página Inicial</a>.</p>
                <small class="text-muted font-weight-light py-3">Se o erro persistir, contate o suporte técnico.</small>
            </div>

            <a class="btn btn-sm btn-outline-secondary" href="">&nbsp;<i class="fas fa-undo"></i>&nbsp;</a>

        </div>

    </section>

@stop

@section('css')

@stop

@section('js')

@stop
