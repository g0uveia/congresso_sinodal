@extends('_layouts.admin')

@section('content')
    <div class="px-4">
        @include('_includes.back.dashboard')

        <h2 class="pt-1 pb-3">Lista de Inscritos</h2>
        @include('_includes.inscrito.searchbox')

        @include('_includes.inscrito.table.complete')
        <div id="pagination"></div>
    </div>
@endsection
