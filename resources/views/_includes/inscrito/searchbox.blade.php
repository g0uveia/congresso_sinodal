<div class="row mb-4">
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">search</i>
                </span>
            </div>
            <input type="text" id="cs-search" name="query" class="form-control" style="height: 38px" placeholder="Procurar...">
        </div>
    </div>
</div>

<script type="text/javascript">
    function live_search(input = '') {
        $.ajax({
            url: '{{ route('inscrito.search') }}',
            method: 'GET',
            data: {
                query: input
            },
            dataType: 'json',
            success: function (data) {
                $('tbody').html(data.table_tbody);
                $('#pagination').html(data.pagination_links);
            }
        });
    }

    $(document).ready(function () {
        live_search();

        $('#cs-search').keyup(function () {
            live_search($(this).val());
        });
    });
</script>
