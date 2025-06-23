@extends('layout')

@section('title', 'TESTE DAS DEUSAS')

@section('content')

    <x-cliente.menu />

    <x-cliente.alerts :$errors />

    <form id="testForm" action="{{ route('cliente.store') }}" class="needs-validation" novalidate method="post"
        autocomplete="off">
        @csrf

        <!--Seção 0-->
        <section id="section0" lass="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center clr-1">QUAL A DEUSA DOMINANTE EM MIM?</h2>
                </div>

                <div class="card-body">
                    <p class="card-text clr-1"> Obs.: Por favor, informe o e-mail atual que você está utilizando, o
                        resultado de
                        seu teste será enviado para o e-mail informado... Em um PDF com o mapeamento das porcentagens de
                        enquadramento em cada perfil de arquétipo de personalidade das Deusas e qual a dominante que melhor
                        te representa! FAÇA UM EXCELENTE TESTE...</p>
                    <p class="card-text clr-1"> Ao preencher o questionário assinale as respostas segundo o que você percebe
                        ser e
                        não o que você gostaria de ser. O quanto mais sincera você for, mais congruente serão suas respostas
                        e melhor será a aplicação desta instigante e reveladora autoavaliação.</p>
                    <p class="card-text clr-1"> Neste sentido é importante que você saiba que não há resposta certa nem
                        errada,
                        apenas há maior ou menor congruência com o que você acredita SER. Considere todos os papéis
                        atualmente em todas as áreas de sua vida, como um todo, não apenas uma parte. </p>
                    <p class="card-text clr-1"> Leia atentamente cada um dos conjuntos com seis afirmações. Em seguida
                        atribua um
                        valor a cada afirmação:</p>
                    {{-- <p class="card-text">
                        <ul>
                            <li>3 = a afirmação aplica-se na <u>Maior parte das vezes</u> a mim</li>
                            <li>2 = a afirmação aplica-se <u>De vez em quando</u> a mim</li>
                            <li>1 = a afirmação só se aplica <u>Às vezes</u> a mim</li>
                            <li>-1 = a afirmação aplica-se <u>Raramente</u> a mim</li>
                        </ul>
                    </p> --}}

                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-lg mx-5 btnPrd" style="background-color: rebeccapurple;"
                        id="btnAvancar0"> Iniciar Teste </button>
                </div>
            </div>
        </section>

        <!--Seção de 1 a 14-->
        @foreach ($dad['sessao'] as $keySessao => $valueSessao)
            <section id="section{{ $keySessao }}" lass="my-5">
                <div class="card">
                    <div class="card-header py-3">
                        <h2 class="text-center clr-1">{{ $valueSessao['titulo'] }}</h2>
                        {{-- <p>
                            <br>
                            @foreach ($dad['instrucao'] as $keyInstrucao => $valueInstrucao)
                                {{ $valueInstrucao }}<br>
                            @endforeach
                        </p> --}}
                    </div>

                    <div class="card-body px-5">

                        @foreach ($valueSessao['questoes'] as $keyQuestoes => $valueQuestoes)
                            <div class="py-3" id="question{{ $valueQuestoes['num'] }}">

                                <div class="alert frtQst"><strong>{{ $valueQuestoes['pergunta'] }}</strong><br></div>

                                @foreach ($dad['opt'] as $keyOpt => $valueOpt)
                                    <div class="form-check form-check-inline px-5"><input class="form-check-input"
                                            type="radio" id="{{ $valueQuestoes['id'] . 'o' . $keyOpt }}"
                                            name="{{ $valueQuestoes['id'] }}" value="{{ $valueOpt['val'] }}"
                                            style="cursor:pointer" />

                                        <label class="form-check-label optQst"
                                            for="{{ $valueQuestoes['id'] . 'o' . $keyOpt }}">{{ $valueOpt['text'] }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    <div class="card-footer py-3 text-center">
                        <button type="button" class="btn btn-lg mx-5 btnPrd" style="background-color: rebeccapurple;"
                            id="btnAvancar{{ $keySessao }}">
                            Avançar <i class="bi bi-arrow-right-short"></i></button>
                    </div>
                </div>
            </section>
        @endforeach

        <!--Seção 15-->
        <section id="section15" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center clr-1">Finalização</h2>
                </div>

                <div class="card-body">

                    <div class="pt-3 mb-3" id="question85">
                        <label for="nome" class="form-label clr-5">Informe seu Nome.</label>
                        <div class="input-group">
                            <span class="input-group-text clr-2"><i class="bi bi-person"></i></span>
                            @if (!empty($dad['nome']))
                                <input type="text" class="form-control" name="nome" id="nome"
                                    value="{{ $dad['nome'] }}" placeholder="Como devemos te chamar?" aria-label="nome"
                                    aria-describedby="nomelHelp" required>
                            @else
                                <input type="text" class="form-control" name="nome" id="nome"
                                    placeholder="Como devemos te chamar?" aria-label="nome" aria-describedby="nomelHelp"
                                    required>
                            @endif
                        </div>
                        <small id="nomelHelp" class="form-text text-muted">Informe seu Nome e Sobrenome. Ex.: Maria Silva</small>
                    </div>

                    <div class="pt-3 mb-3" id="question86">
                        <label for="email" class="form-label clr-5">Informe o melhor email para que possamos enviar o
                            resultado do teste.</label>
                        <div class="input-group">
                            <span class="input-group-text clr-2"><i class="bi bi-envelope-open-fill"></i></span>
                            @if (!empty($dad['email']))
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ $dad['email'] }}" placeholder="Informe um endereço de email"
                                    aria-label="email" aria-describedby="emailHelp" required>
                            @else
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Informe um endereço de email" aria-label="email" aria-describedby="emailHelp"
                                    required>
                            @endif
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Informe seu Email para recebr o resultado e orientações. Ex.: mariasilva@email.com</small>
                    </div>

                    <div class="pt-3 mb-3" id="question87">
                        <label for="fone" class="form-label clr-5">Informe seu Celular com WhatsApp para contato.</label>
                        <div class="input-group">
                            <span class="input-group-text clr-2"><i class="bi bi-telephone-forward-fill"></i></span>
                            @if (!empty($dad['fone']))
                                <input type="text" class="form-control" name="fone" id="fone"
                                    value="{{ $dad['fone'] }}" placeholder="Informe o numero de Celular com WhatsApp"
                                    aria-label="fone" aria-describedby="foneHelp" required>
                            @else
                                <input type="text" class="form-control" name="fone" id="fone"
                                    placeholder="Informe o numero de Celular com WhatsAppe" aria-label="fone" aria-describedby="foneHelp" required>
                            @endif
                        </div>
                        <small id="foneHelp" class="form-text text-muted">Informe o numero de Celular com WhatsApp (digite apenas numeros, sem espaços ou traços. Informe o DDD. São 11 digitos). Ex.: 41912345678</small>
                    </div>

                </div>

                <div class="card-footer py-3 text-center">
                    <button type="submit" class="btn btn-lg mx-5 btnPrd" style="background-color: rebeccapurple;"
                        id="finalizar"> Finalizar <i class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>
    </form>

    <x-cliente.rodape />

@stop

@section('js1')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/app.js"></script>
@stop

@section('js2')

@stop

@section('css')
    <!-- <link rel="stylesheet" href="assets/css/app.css" /> -->
@stop
