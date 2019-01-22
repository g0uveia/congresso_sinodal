<div class="card p-md-3 p-2">
    <div class="card-body">
        <h4 class="pb-3">Inscrições por Mês</h4>

        <canvas id="cs-portempo-chart"></canvas>

        <script type="text/javascript">
            ctx = document.getElementById('cs-portempo-chart').getContext('2d');

            data = {
                datasets: [{
                    label: 'Inscrições',
                    data: [
                        @foreach ($inscritos_por_mes as $mes => $num)
                            {{ $num }},
                        @endforeach
                    ],
                    borderColor: '#008450'
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                @foreach ($inscritos_por_mes as $mes => $num)
                    "{{ $mes }}",
                @endforeach
            ]};

            options = {
                legend: {
                    position: 'bottom'
                },
                aspectRatio: 2
            }

            var porPresbChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: options
            })
        </script>
    </div>
</div>
