<section id="corpo" class="p-1">

    <div class="text-center my-2 display-3">
        Relatório
        <small class="text-muted">Sintético</small>
    </div>

    <p class="text-center small text-muted fst-italic">Este relatório apresenta a quantidade de consultas por deusa, a soma e a média de consultas por deusa.</p>

    <div class="row align-items-center mt-5">
        <div class="col-md-6">
            <section>
                <div id="chartContainer"></div> <!-- Adicione esta linha -->
            </section>
        </div>
        <div class="col-md-6">
            <section>
                <table id="minhaTabela" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Deusas</th>
                            <th>Quantidade</th>
                            <th>Soma</th>
                            <th>Média</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Afrodite</td>
                            <td>{{$resultado['quantidade']['qtd_afrodite']}}</td>
                            <td>{{$resultado['soma']['soma_afrodite']}}</td>
                            <td>{{$resultado['media']['media_afrodite']}}</td>
                        </tr>
                        <tr>
                            <td>Artemis</td>
                            <td>{{$resultado['quantidade']['qtd_artemis']}}</td>
                            <td>{{$resultado['soma']['soma_artemis']}}</td>
                            <td>{{$resultado['media']['media_artemis']}}</td>
                        </tr>
                        <tr>
                            <td>Atena</td>
                            <td>{{$resultado['quantidade']['qtd_atena']}}</td>
                            <td>{{$resultado['soma']['soma_atena']}}</td>
                            <td>{{$resultado['media']['media_atena']}}</td>
                        </tr>
                        <tr>
                            <td>Demeter</td>
                            <td>{{$resultado['quantidade']['qtd_demeter']}}</td>
                            <td>{{$resultado['soma']['soma_demeter']}}</td>
                            <td>{{$resultado['media']['media_demeter']}}</td>
                        </tr>
                        <tr>
                            <td>Hera</td>
                            <td>{{$resultado['quantidade']['qtd_hera']}}</td>
                            <td>{{$resultado['soma']['soma_hera']}}</td>
                            <td>{{$resultado['media']['media_hera']}}</td>
                        </tr>
                        <tr>
                            <td>Persofone</td>
                            <td>{{$resultado['quantidade']['qtd_persefone']}}</td>
                            <td>{{$resultado['soma']['soma_persefone']}}</td>
                            <td>{{$resultado['media']['media_persefone']}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4" class="text-center"> Total de registros: {{$resultado['total_registros']}}</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </div>
    
</section>

@section('js1')
    <script>
        $(document).ready(async function() {
            // Mostrar indicador de carregamento
            $('#loader').show();
            $('#chartContainer').hide();
            $('#minhaTabela').hide();

            // Passar dados do PHP para JavaScript
            const data = <?= json_encode($resultado['quantidade']) ?>;
            
            // Exibir o resultado
            await exibirResultado(data);

            // Configuração do DataTable
            $('#minhaTabela').DataTable({
                info: false,
                ordering: true,
                paging: false,
                searching: false,
                order: [[1, 'desc']]
            });

            // Mostrar indicador de carregamento
            $('#loader').hide();
            $('#chartContainer').show();
            $('#minhaTabela').show();
        });

        function exibirResultado(data) {
            google.charts.load('current', { 'packages': ['corechart'] });

            if (typeof google.charts !== 'undefined') {

                // Montar os dados para o gráfico de pizza
                const chartData = [['Deusa', 'Quantidade']];

                Object.entries(data).forEach(([deusa, quantidade]) => {
                    deusa = deusa.replace("qtd_", "").trim().toUpperCase();
                    quantidade = parseFloat(quantidade);
                    chartData.push([deusa, quantidade]);
                });

                console.log(chartData);
                google.charts.setOnLoadCallback(function () { drawChart(chartData) });
            } else {
                console.error('Erro: Biblioteca Google Charts não está carregada.');
            }

            // Atualizar os valores de soma e média

            // Definir uma função para atualizar os valores
            function atualizarValores(nome, dados) {
                const qtdSpan = document.getElementById(`qtd_${nome}`);
                const somaSpan = document.getElementById(`soma_${nome}`);
                const mediaSpan = document.getElementById(`media_${nome}`);

                qtdSpan.textContent = parseInt(dados.quantidade[`qtd_${nome}`]) || 0;
                somaSpan.textContent = parseInt(dados.soma[`soma_${nome}`]) || 0;
                mediaSpan.textContent = parseFloat(dados.media[`media_${nome}`].toFixed(2)) || 0;
            }

            // Lista de deusas
            const deusas = ['afrodite', 'artemis', 'atena', 'demeter', 'hera', 'persofone'];

            console.log(data);
            // Atualizar os valores para cada deusa
            deusas.forEach(deusa => {
                atualizarValores(deusa, data);
            });

            // Atualizar o total de registros
            const totalConsultasSpan = document.getElementById('totalConsultas');
            totalConsultasSpan.textContent = parseInt(data.total_registros) || 0;
        }

        function drawChart(dt) {

            // Calcular a largura e altura da tela
            const larguraTela = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            const alturaTela = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

            // Definir porcentagens desejadas para a largura e altura do gráfico
            const porcentagemLargura = 48; // Porcentagem da largura da tela
            const porcentagemAltura = 48; // Porcentagem da altura da tela

            // Calcular as dimensões do gráfico com base nas porcentagens
            const larguraGrafico = (porcentagemLargura / 100) * larguraTela;
            const alturaGrafico = (porcentagemAltura / 100) * alturaTela;

            // Ajustar a margem do gráfico (adapte conforme necessário)
            const margemGrafico = { top: 10, right: 10, bottom: 10, left: 10 };

            var data = google.visualization.arrayToDataTable(dt);

            var options = {
                title: 'Estatistica por Deusa',
                pieHole: 0.4,
                pieStartAngle: 100,
                width: larguraGrafico - margemGrafico.left - margemGrafico.right,
                height: alturaGrafico - margemGrafico.top - margemGrafico.bottom,
                chartArea: { left: margemGrafico.left, top: margemGrafico.top, width: '80%', height: '80%' }
            };

            var chart = new google.visualization.PieChart(document.getElementById('chartContainer'));

            chart.draw(data, options);
        }
    </script>
@endsection