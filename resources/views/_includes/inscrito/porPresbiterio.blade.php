<div class="card p-md-3 p-2  h-100">
    <div class="card-body d-flex flex-column justify-content-around">
        <h4 class="pb-3 text-center">Inscrições por Presbitério</h4>

        <canvas id="cs-porpresb-chart"></canvas>

        <script type="text/javascript">
            ctx = document.getElementById('cs-porpresb-chart').getContext('2d');

            data = {
                datasets: [{
                    data: [
                        @foreach ($presbiterios as $presb)
                            {{ $presb->numInscritos() }},
                        @endforeach
                    ],
                    backgroundColor: [
                        '#008450', '#2E986E', '#00D07E', '#008450', '#005131', '#006A41'
                    ]
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                @foreach ($presbiterios as $presb)
                    "{{ $presb->sigla }}",
                @endforeach
            ]};

            options = {
                responsive: true,
                legend: {
                    position: 'bottom'
                },
                aspectRatio: 1
            }

            var porPresbChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options
            })
        </script>
    </div>
</div>
