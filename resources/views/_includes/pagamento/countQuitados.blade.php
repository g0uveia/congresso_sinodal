<div class="large-chartbox">
    <div id="cs-diviquit-chart"
        chart-type="donut" data-chart-max="{{ $num_inscritos }}"
            data-chart-segments='{ "0":["0","{{ $num_inscritos }}","#4A745E"], "1":["0","{{ $num_dividas_quitadas }}","#3CB674"]}'
                data-chart-text="{{ $num_dividas_quitadas == 0 ? '&nbsp0&nbsp' : $num_dividas_quitadas }}"
                    data-chart-caption="Dívidas Quitadas"
                        data-chart-initial-rotate=" 0">

    </div>
</div>
