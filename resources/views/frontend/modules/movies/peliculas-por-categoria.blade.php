@extends('frontend.layout.vistaBaseMenu')
@section('content')
    <style>
        .MenuCategorias {
            width: 100%;
            height: 220px;
            margin-top: 60px;
        }

        .MenuCategorias2 {
            width: 100%;
            height: 150px;
            margin-top: 60px;
        }
    </style>
    <title>PELICULAS DE CHILL - PELICULAS</title>

    <div class="MenuCategorias bg-dark bg-gradient d-none d-lg-block">

        <div style="margin-top: 60px;" class="splide ">
            <h1 style="margin-bottom: 40px; font-size: 40px ">Peliculas - {{ $categoria->nombre }}</h1>

            <div class="splide__track">
                <ul class="splide__list">
                    <a href="{{ route('extrasPeliculas') }}" selected class="btn botonesCategorias">Todas las peliculas</a>
                    @foreach ($categorias as $categoriam)
                        @if ($categoriam->Tipo == 'pelicula')
                            @if ($categoria->id == $categoriam->id)
                                <a href="{{ route('extrasPeliculas_porCategoria', ['categoria' => $categoriam->id]) }}"
                                    class="btn botonesCategorias selectBtn">{{ $categoriam->nombre }}</a>
                            @else
                                <a href="{{ route('extrasPeliculas_porCategoria', ['categoria' => $categoriam->id]) }}"
                                    class="btn botonesCategorias">{{ $categoriam->nombre }}</a>
                            @endif
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

    <div class="MenuCategorias2 bg-dark bg-gradient d-lg-none">
        <div style="margin-left: 35px; padding-top: 60px; ">
            <div class="nav-item dropdown">
                <a style="color: white; font-size: 16px; width: max-content; margin-left: -20px;"
                    class="nav-link dropdown-toggle btn botonesCategorias btn botonesCategorias" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Peliculas - {{ $categoria->nombre }}
                </a>
                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href="{{ route('extrasPeliculas') }}">Todas las peliculas</a></li>
                    @foreach ($categorias as $categoriam)
                        <li><a class="dropdown-item"
                                href="{{ route('extrasPeliculas_porCategoria', ['categoria' => $categoriam->id]) }}">{{ $categoriam->nombre }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="rowCatalogo">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-xl-4 row-cols-lg-4">
            @foreach ($peliculas as $pelicula)
                <div class="col">
                    <div class="zoom2 divCatalogoImagen">
                        <a href="{{ route('show.movie', ['pelicula' => $pelicula->id]) }}">
                            <div class="card card-movie" style="width: 100%; height: 100%;">
                                <img src="{{ asset($pelicula->ImagenCartel) }}" class="movie-img" alt="...">
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagintaion-div">
            {{ $peliculas->links() }}
        </div>
    </div>
@endsection
@section('script')
    <script>
        var menu = document.getElementById('MenuInicio');
        menu.style.opacity = "1";
        menu.style.backgroundColor = "{{ str_replace(')', ', ' . $opacityBoxShadows . ')', $categoria->Color) }}";
    </script>

    <script>
        function obtener(t) {
            return t;
        }
    </script>
@endsection
