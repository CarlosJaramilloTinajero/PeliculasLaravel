@extends('vistaBaseMenu')
@section('content')

<title>PELICULAS DE CHILL - PELICULAS</title>

<div class="MenuCategorias bg-dark bg-gradient d-none d-lg-block">

    <div style="margin-top: 60px;" class="splide ">
        <h1 style="margin-bottom: 40px; font-size: 40px ">Peliculas - {{$categoria->nombre}}</h1>

        <div class="splide__track">
            <ul class="splide__list">
                <a href="{{route('extrasPeliculas')}}" selected class="btn botonesCategorias">Todas las peliculas</a>
                @foreach ($categorias as $categoriam)
                @if ($categoria->id == $categoriam->id)
                <a href="{{route('extrasPeliculas_porCategoria',['categoria' => $categoriam->id])}}" class="btn botonesCategorias" style="background-color: white; color: black;">{{$categoriam->nombre}}</a>
                @else
                <a href="{{route('extrasPeliculas_porCategoria',['categoria' => $categoriam->id])}}" class="btn botonesCategorias">{{$categoriam->nombre}}</a>
                @endif
                @endforeach

            </ul>
        </div>
    </div>
</div>

<div class="MenuCategorias2 bg-dark bg-gradient d-lg-none">
    <div style="margin-left: 35px; padding-top: 60px; ">
        <div class="nav-item dropdown">
            <a style="color: white; font-size: 21px;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Peliculas - {{$categoria->nombre}}
            </a>
            <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="{{route('extrasPeliculas')}}">Todas las peliculas</a></li>
                @foreach ($categorias as $categoriam)
                <li><a class="dropdown-item" href="{{route('extrasPeliculas_porCategoria',['categoria' => $categoriam->id])}}">{{$categoriam->nombre}}</a></li>
                @endforeach
            </ul>
        </div>


    </div>
</div>


<center>
    <div class="MostrarContenidos">

        <div class="card-group" id="divF">

            @foreach ($peliculas as $pelicula)
            @if ($pelicula->categoria_id == $categoria->id)
            <center>
                <a href="{{route('mostrarPelicula',['pelicula' => $pelicula->id])}}">
                    <div class="zoom2 card cartaMotrarContenido shadow ">
                        <img style="height: 100%;" src="{{asset($pelicula->ImagenCartel)}}" class="img-fluid ImagenPeliculaChica" alt="...">
                    </div>
                </a>
            </center>
            @endif


            @endforeach

        </div>
</center>

<br><br>

<script>
    var menu = document.getElementById('MenuInicio');
    menu.style.opacity = 1;
</script>

<script>
    function obtener(t) {
        let ancho = document.documentElement.clientWidth;
        var AnchoPorcentaje = .231;
        var sumaPorcentaje = .07;
        var w = 0;

        if (ancho < 900 && ancho >= 600) {
            w = (AnchoPorcentaje + sumaPorcentaje) * ancho;
            var div = document.getElementById('divF');

            var divFotos = div.getElementsByTagName('div');

            for (var i = 0; i < divFotos.length; i++) {
                var aux = div.getElementsByTagName('div')[i];
                aux.style.width = w + "px";
                aux.style.height = w + "px";
            }
        } else
        if (ancho < 600) {
            w = ((AnchoPorcentaje + (sumaPorcentaje * 2)) + .08) * ancho;
            var div = document.getElementById('divF');

            var divFotos = div.getElementsByTagName('div');

            for (var i = 0; i < divFotos.length; i++) {
                var aux = div.getElementsByTagName('div')[i];
                aux.style.width = w + "px";
                aux.style.height = w + "px";
            }
        } else if (ancho > 1500) {
            w = (AnchoPorcentaje - .0455) * ancho;
            var div = document.getElementById('divF');

            var divFotos = div.getElementsByTagName('div');

            for (var i = 0; i < divFotos.length; i++) {
                var aux = div.getElementsByTagName('div')[i];
                aux.style.width = w + "px";
                aux.style.height = w + "px";
            }
        } else {
            w = AnchoPorcentaje * ancho;
            var div = document.getElementById('divF');

            var divFotos = div.getElementsByTagName('div');

            for (var i = 0; i < divFotos.length; i++) {
                var aux = div.getElementsByTagName('div')[i];
                aux.style.width = w + "px";
                aux.style.height = w + "px";
            }
        }
        return t;
    }
</script>

@endsection