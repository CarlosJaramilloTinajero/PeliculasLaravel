@extends('frontend.layout.vistaBaseMenu')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/styleOMBA.css') }}">
@endpush
@section('content')
    <title>Agregar pelicula</title>
    <div class="container p-4" style="margin-top: 100px;">
        <h3 class="text-center">Agregar una nueva pelicula</h3>
        <div class="d-flex justify-content-center mb-5">
            <a href="{{ route('vue.movies') }}" class="btn btn-link">Usar API con Vue 3</a>
        </div>
        @livewire('movies.add-movie-omba')
        {{-- @livewire('movies.add-movie-modal') --}}
    </div>
    <br>

    <script>
        var menu = document.getElementById('MenuInicio');
        menu.style.opacity = 1;
    </script>

    <script>
        function obtener(t) {
            return t;
        }
    </script>
@endsection
