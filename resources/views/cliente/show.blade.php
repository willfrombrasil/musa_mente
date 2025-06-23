@extends('layout')

@section('title', 'TESTE DAS DEUSAS')

@section('content')

    <section class="my-5">
        <div class="card">
            <div class="card-header py-3" style="background-color: indigo; color:white">
                <div class="text-center">
                    <h3>
                        <span class="fw-light"> Resultado TESTE DAS DEUSAS </span>
                        <span class="text-capitalize"><?= $resultado->nome ?></span>
                    </h3>
                </div>
                <hr>
                <div class="d-flex justify-content-evenly pt-1">

                    <span class="fw-bold">E-mail da Avaliada:</span>
                    <span class="fst-italic"><?= $resultado->email ?></span>

                    <span class="fw-bold">Respondido em:</span>
                    <span class="fst-italic"><?= date('d/m/Y ', strtotime($resultado->data)) ?></span>

                </div>
            </div>
            <div class="card-body px-5">

                <div id="grafico" style="width: 900px; height: 500px;"></div>

                <div class="alert" style="background-color:blueviolet ; color:white">
                    <div class="d-flex justify-content-evenly px-3 row">
                        <div class="col-md-5 py-1">
                            <div class="text-center fs-5">A Deusa Dominante em você é</div>
                            <div class="fw-bold text-center fs-3"><?= $result[0]['deusa'] ?></div>
                        </div>
                        <div class="col-md-2 text-center">
                            <img src="\assets\img\olho.svg" alt="" style="height:96px; width:96px;">
                        </div>
                        <div class="col-md-5 py-1">
                            <div class="fw-bold text-center fs-4">MUSA DA MENTE</div>
                            <div class="text-center fs-6">ORDEM DAS MUSAS</div>
                        </div>
                    </div>
                </div>

                <!-- imagem -->
                <img src="" alt="">

                <p class="card-text"> Seu gráfico com a Deusa dominante. Aquela que mais se conecta com você! Mais as
                    porcentagens de cada Deusa que existe em seu comportamento atual... </p>

                <p class="card-text"> <b>É o início de seu autoconhecimento</b> para ter mais liberdade em ser você mesma.
                </p>

                <h5 class="card-title my-5">ENTENDA MELHOR...</h5>

                <p class="card-text"> As deusas gregas são imagens de mulheres que viveram na imaginação humana por mais de
                    três mil anos. </p>

                <p class="card-text"> As deusas são modelos ou representações daquilo que as mulheres se assemelham. </p>

                <!-- imagem -->
                <img src="" alt="">

                <p class="card-text"> Na Grécia antiga as mulheres sabiam que sua vocação ou profissão as colocava sob o
                    domínio de uma determinada Deusa a quem elas veneravam. </p>

                <p class="card-text"> Todas as deusas são padrões potenciais na psique das mulheres.” Jean Shinoda Bolen
                </p>

                <p class="card-title"> As principais características das 6 principais Deusas são: </p>

                <p class="card-text"> <b>A MULHER-ATENA</b> é regida pela deusa da sabedoria e da civilização; ela busca a
                    realização profissional numa carreira, envolvendo-se com educação, cultura intelectual, justiça social e
                    com política. </p>

                <p class="card-text"> <b>A MULHER-AFRODITE</b> é regida pela deusa do amor, e está voltada principalmente
                    para relacionamentos humanos, sexualidade, intriga, romance, beleza e inspiração das artes. </p>

                <p class="card-text"> <b>A MULHER-PERSÉFONE</b> é regida pela deusa do mundo avernal (submundo); ela é
                    mediúnica e atraída pelo mundo espiritual, pelo oculto, pelas experiências místicas e visionárias, e
                    pelas questões ligadas a morte. </p>

                <p class="card-text"> <b>A MULHER-ÁRTEMIS</b> é regida pela deusa das selvas; ela é prática, atlética,
                    aventureira; aprecia a cultura física, a solidão, vida ao ar livre e os animais; dedica-se à proteção do
                    meio ambiente, aos estilos de vida alternativos e às comunidades de mulheres. </p>

                <p class="card-text"> <b>A Mulher Deméter</b> é regida pela deusa das colheitas; ela é uma verdadeira mãe
                    terra que gosta de estar grávida, de amamentar e de cuidar de crianças; está envolvida com todos os
                    aspectos do nascimento e com os ciclos reprodutivos da mulher. </p>

                <p class="card-text"> <b>A Mulher Hera</b> é regida pela deusa dos céus; ela se ocupa do casamento, da
                    convivência com o homem e, sempre que as mulheres são líderes ou governantes, de questões ligadas ao
                    poder. </p>

                <p class="card-text"> FONTE: Do livro: A Deusa Interior de Jennifer Barker Woolger e Roger J. Woolger </p>

                <p class="card-text"> Os arquétipos de cada Deusa a seguir, São importantes conceitos sobre o significado de
                    <b><i>arquétipo</i></b>, que é termo bastante utilizado pela psicologia Junguiana.
                </p>

                <p class="card-text"> <i>“Arquétipo é um conjunto de imagens psíquicas presentes no inconsciente coletivo
                        que seria a parte mais profunda do inconsciente humano. Os arquétipos são herdados geneticamente dos
                        ancestrais de um grupo de civilização, etnia ou povo. Os arquétipos não são memórias coesas e
                        “palpáveis” no contexto ou definição clássica de memória, mas são o conjunto de informações
                        inconscientes que motivam o ser humano a acreditar ou dar crédito a determinados tipos de
                        comportamento. Os arquétipos correspondem ao conjunto de crenças e valores comportamentais básicos
                        do ser humano, <b>podem se manifestar nas crenças religiosas, mitológicas ou no comportamento
                            inconsciente do indivíduo.</b>”</i> Dicionário Informal </p>

                <p class="card-text">Musa, é muito natural que acessemos mais o lado sombra (negativo) das Deusas porque não temos esses poderes equilibrados em nós e porque não sabemos usar nosso poder mental, vivemos no automático!
                <br><br>Por isso te pergunto, quer saber mais e aprender como usar esses poderes dentro de você e sua mente a seu favor não mais contra?
                </p>

                {{-- <!-- imagem -->
                <img src="" alt="">

                <h5 class="card-title"> Os arquétipos de cada deusa e o Caminho para o Crescimento: </h5>

                <p class="card-text"> <b>ATENA</b> – Seu arquétipo é a mente lógica, governada mais pela razão do que pelo
                    coração. O seu caminho para o crescimento se dá em 3 questões específicas: </p>

                <p class="card-text">
                <ol>
                    <li><b>Voltar-se para seu interior:</b> Uma frase que demonstra Atenas é “Minha cabeça está sempre
                        funcionando”. Ela sempre está ativa e usando da razão, por isso, é imprescindível, que pare um pouco
                        e olhe para dentro de si mesmo e amplie seu autoconhecimento.</li>
                    <li><b>Recupera a criança:</b> Já que para Atenas “Ser esperta a respeito de tudo” é algo bem marcante;
                        ela acaba por deixar de ser criança para ser adulta muito precocemente, portanto, deixar espaço para
                        sua criança interior agir, ou seja, se permitir ser cuidada, brincar, rir, chorar, ouvir os outros e
                        aprender com as experiências dos mesmos.</li>
                    <li><b>Descobrir a mãe:</b> Entrar em contato com a energia da sua própria mãe é imprescindível, já que
                        ela, foi criada somente pelo seu pai e não ter valorizado e honrado sua própria mãe.</li>
                </ol>
                </p>

                <p class="card-text"> <b>AFRODITE</b> – Seu arquétipo é guiar e controlar o prazer do amor e da beleza, da
                    sexualidade e da sensualidade. O seu caminho para o crescimento é levar a consciência sua característica
                    predominante e se relacionar com ela de forma saudável, de modo que não se reprima e nem se frustre ao
                    se envolver com os outros. </p>

                <p class="card-text"> <b>PERSÓFONE</b> – Seu arquétipo refere-se a característica de ser compreensiva nas
                    ações dos
                    outros, além de não tomar atitudes por si própria, e depender de outras pessoas. O seu caminho para o
                    crescimento é responder e cuidar da sua própria vida. </p>

                <p class="card-text"> <b>ÁRTEMIS</b> – Seu arquétipo é o espírito feminino independente, refere-se a
                    possibilidade da
                    mulher se relacionar com seus próprios objetivos e tomar suas próprias decisões. O seu caminho para o
                    crescimento está diretamente relacionado com o fato dela ser receptiva, aberta para os relacionamentos
                    amorosos, uma vez que sua característica marcante é a independência. </p>

                <p class="card-text"> <b>DEMÉTER</b> – Seu arquétipo é o materno. O seu caminho para o crescimento, está
                    profundamente ligado à sua dificuldade em dizer “não”, a ser generosa com tudo e todos, igualmente como
                    uma boa mãe. Consequentemente, tem bloqueio em perceber seus pontos negativos e dar a oportunidade de
                    mudar, de crescer e se desenvolver. </p>

                <p class="card-text"> <b>HERA</b> – Seu arquétipo é o desejo de se tornar esposa, quando está sozinha
                    sente-se
                    incompleta. </p>

                <p class="card-text"> O seu caminho para o crescimento, em virtude disso, seria pensar antes de se envolver
                    amorosamente com alguém. </p>

                <p class="card-text"> <b>FONTE:</b> do livro: As Deusas e a Mulher de Jean Shinoda Bolen </p>

                <p class="card-text text-center"> Parabéns! Você é uma buscadora, e quem busca... encontra! </p>

                <p class="card-text text-center"> Não 'seje' burraaaa, seja Musa. </p>

                <p class="card-text text-center" style="color:blueviolet">🌛<b>ORDEM DAS MUSAS</b>🌜🦇<br>Musa
                    Anfitriã - <b>Aline Lachovski</b><br><a href="mailto:contato@musadamente.com.br"
                        target="_blank">contato@musadamente.com.br</a></p> --}}

                <p class="card-text text-center"> Parabéns! Você é uma buscadora, e quem busca, encontra! </p>

                <p class="card-text text-center" style="color:blueviolet"><b>ORDEM DAS MUSAS</b><br>Musa Anfitriã - <b>Aline Lachovski</b><br><a href="mailto:contato@musadamente.com.br"
                        target="_blank">contato@musadamente.com.br</a></p>

            </div>
            <div class="card-footer pt-3 px-5">
                <p class="d-flex justify-content-around text-center px-5 mx-5">

                    <!-- <a type="button" class="btn btn-success btn-sm" href="https://form.jotform.com/232853207708660" target="_blank">AGENDE A SUA SESSÃO ESTRATÉGICA SEM CUSTO NENHUM!</a>
                    <a type="button" class="btn btn-success btn-sm" href="whatsapp://5548991497040" target="_blank">AGENDE SUA CONSULTORIA</a>
                    <a type="button" class="btn btn-success btn-sm" href="https://api.whatsapp.com/send?phone=5548991497040" target="_blank">AGENDE A SUA SESSÃO ESTRATÉGICA SEM CUSTO NENHUM!</a> -->

                    <!-- <a type="button" class="btn btn-success btn-sm" href="https://wa.me/5548991497040" target="_blank">AGENDE A SUA SESSÃO ESTRATÉGICA SEM CUSTO NENHUM!</a> -->

                    {{-- <a type="button" class="btn btn-success btn-sm" href="https://musadamente.com.br/bkp-antigo/agendamento-tdm/" target="_blank">AGENDE A SUA SESSÃO ESTRATÉGICA SEM CUSTO NENHUM!</a> --}}

                    {{-- <a type="button" class="btn btn-success btn-sm" href="https://musadamente.com.br/bkp-antigo/agendamento-tdm/" target="_blank">Saiba Mais Sobre o Diagnóstico “QUEM ESTOU?” 100% Grátis!</a> --}}

                    {{-- <a type="button" class="btn btn-success btn-sm" href="https://forms.gle/uJMjh2NXRUX8Rv697" target="_blank">Saiba Mais Sobre o Diagnóstico “QUEM ESTOU?” 100% Grátis!</a> --}}

                    <a type="button" class="btn btn-success btn-sm" href="https://musadamente.com.br/agendamento-tdm/" target="_blank">Saiba Mais Sobre o Diagnóstico “QUEM ESTOU?” 100% Grátis!</a>

                    <button type="button" class="btn btn-secondary btn-sm" onclick="window.print();"
                        style="background-color: indigo">BAIXE SEU RESULTADO EM PDF</button>
                </p>
            </div>
        </div>
    </section>
@stop

@section('js1')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Resultado Teste <?= $resultado->nome ?>', 'Resultado no teste de <?= $resultado->nome ?>', {
                    role: 'style'
                }],
                ["<?= $result[0]['deusa'] ?> (<?= intval($result[0]['pnt']) ?> Pontos) ",
                    <?= intval($result[0]['pnt']) ?>, 'Indigo'
                ],
                ["<?= $result[1]['deusa'] ?> (<?= intval($result[1]['pnt']) ?> Pontos) ",
                    <?= intval($result[1]['pnt']) ?>, 'DarkViolet'
                ],
                ["<?= $result[2]['deusa'] ?> (<?= intval($result[2]['pnt']) ?> Pontos) ",
                    <?= intval($result[2]['pnt']) ?>, 'MediumOrchid'
                ],
                ["<?= $result[3]['deusa'] ?> (<?= intval($result[3]['pnt']) ?> Pontos) ",
                    <?= intval($result[3]['pnt']) ?>, 'Orchid'
                ],
                ["<?= $result[4]['deusa'] ?> (<?= intval($result[4]['pnt']) ?> Pontos) ",
                    <?= intval($result[4]['pnt']) ?>, 'Violet'
                ],
                ["<?= $result[5]['deusa'] ?> (<?= intval($result[5]['pnt']) ?> Pontos) ",
                    <?= intval($result[5]['pnt']) ?>, 'Plum'
                ]
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                title: '',
                width: 1024,
                legend: {
                    position: 'none'
                },
                chart: {
                    title: '',
                    subtitle: ''
                },
                bars: 'horizontal', // Required for Material Bar Charts.
                axes: {
                    x: {
                        0: {
                            side: 'top',
                            label: 'Resultado Teste <?= $resultado->nome ?>'
                        } // Top x-axis.
                    }
                },
                bar: {
                    groupWidth: "100%"
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('grafico'));
            chart.draw(view, options);
        };
    </script>

@stop
