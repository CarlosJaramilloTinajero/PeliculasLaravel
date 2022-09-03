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



<div id="divF" class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 1%;">
    <?php $contD = 0; ?>
    @foreach ($peliculas as $pelicula)

    @if ($pelicula->categoria_id == $categoria->id)
    <div id="div-{{$contD}}" class="zoom2 col">

        <a class=" shadow" href="{{route('mostrarPelicula',['pelicula' => $pelicula->id])}}" style="width: 100%; height: 100%;">
            <div class=" card text-bg-dark PeliculaDiv" style="width: 100%; height: 100%;">
                <img src="{{asset($pelicula->ImagenCartel)}}" class=" rounded card-img" alt="..." style="height: 100%;">
                <div class="card-img-overlay">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <p class="card-text"></p>
                </div>
            </div>
        </a>
    </div>
    <?php $contD++; ?>
    @endif



    @endforeach
</div>

<br><br>

<script>
    var menu = document.getElementById('MenuInicio');
    menu.style.opacity = 1;
</script>


<script>
    function obtener(t) {
        let ancho = document.documentElement.clientWidth;
        var AnchoPorcentaje = .237;
        var sumaPorcentaje = .0035;
        var pan0 = 1750;
        var pan1 = 900;
        var pan2 = 650;
        var pantA = 0;
        var w = 0;
        var i = 0;
        // var divD = document.getElementById('divF');
        
        while (document.getElementById('div-' + i)) {
            var divFotos = document.getElementById('div-' + i);
            if (divFotos != null) {
                if (ancho > pan0) {
                    w = (AnchoPorcentaje -.0795)  * ancho;
                } else if (ancho > pan1 && ancho <= pan0) {
                    w = (AnchoPorcentaje - .0455) * ancho;
                } else if (ancho < pan1 && ancho >= pan2) {
                    w = (AnchoPorcentaje + sumaPorcentaje) * ancho;
                } else if (ancho < pan2) {
                    w = ((AnchoPorcentaje + (sumaPorcentaje * 2)) + .08) * ancho;
                }
                divFotos.style.width = w + "px";
                divFotos.style.height = (w + (w * .3)) + "px";
                divFotos.style.margin = (ancho * .005) + "px";
                i++;
            }

        }
        return t;
    }
</script>

@endsection