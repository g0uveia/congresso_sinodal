<h4 class="pb-3">Pagamentos por Mês</h4>

<canvas id="cs-pagatempo-chart"></canvas>

<script type="text/javascript">
    ctx = document.getElementById('cs-pagatempo-chart').getContext('2d');

    data = {
        datasets: [{
            label: 'Valor (R$)',
            data: [
                @foreach ($inscrito->pagamentosPorMes() as $mes => $valor)
                    {{ $valor }},
                @endforeach
            ],
            'backgroundColor': [
                '#75F0B9', '#91B8A6', '#50A37E', 'BDF0D9', '377056', '438A6A'
            ]
        }],

        labels: [
            @foreach ($inscrito->pagamentosPorMes() as $mes => $valor)
                '{{ $mes }}',
            @endforeach
        ]
    };

    options = {
        legend: {
            position: 'bottom'
        },
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero":true
                }
            }]
        },
        aspectRatio: 2
    }

    var porPresbChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    })
</script>
