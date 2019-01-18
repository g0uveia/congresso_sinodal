<div class="d-flex justify-content-center">
    <div class="large-chartbox">
        <div id="cs-diviquit-chart"
            chart-type="donut" data-chart-max=190
                data-chart-segments='{ "0":["0","{{ $inscrito->valorPago() }}","#67A899"] }'
                    data-chart-text="R${{ $inscrito->valorPago() }}"
                        data-chart-caption="Valor Pago"
                            data-chart-initial-rotate="0">

        </div>
    </div>
</div>
