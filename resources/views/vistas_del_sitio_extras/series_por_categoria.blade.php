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
<title>PELICULAS DE CHILL - SERIES</title>

<div class="MenuCategorias bg-dark bg-gradient d-none d-lg-block">

    <div style="margin-top: 60px;" class="splide ">
        <h1 style="margin-bottom: 40px; font-size: 40px ">Series - {{$categoria->nombre}}</h1>

        <div class="splide__track">
            <ul class="splide__list">
                <a href="{{route('Series')}}" selected class="btn botonesCategorias">Todas las series</a>
                @foreach ($categorias as $categoriam)
                @if ($categoriam->Tipo=="serie")
                @if ($categoria->id == $categoriam->id)
                <a href="{{route('seriesPorCategoria',['categoria' => $categoriam->id])}}" class="btn botonesCategorias selectBtn">{{$categoriam->nombre}}</a>
                @else
                <a href="{{route('seriesPorCategoria',['categoria' => $categoriam->id])}}" class="btn botonesCategorias">{{$categoriam->nombre}}</a>
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
            <a style="color: white; font-size: 16px; width: max-content; margin-left: -20px;" class="nav-link dropdown-toggle btn botonesCategorias btn botonesCategorias" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Series - {{$categoria->nombre}}
            </a>
            <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="{{route('Series')}}">Todas las series</a></li>
                @foreach ($categorias as $categoriam)
                @if ($categoriam->Tipo=="serie")
                <li><a class="dropdown-item" href="{{route('seriesPorCategoria',['categoria' => $categoriam->id])}}">{{$categoriam->nombre}}</a></li>
                @endif
                @endforeach
            </ul>
        </div>


    </div>
</div>



<div id="divF" class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 1%; margin-left: 1.8%; max-width: 98.2%;">
    <?php $contD = 0; ?>
    @foreach ($series as $serie)

    @if ($serie->categoria_id == $categoria->id)
    <div id="div-{{$contD}}" class="zoom2 col divCatalogoImagen">

        <a class=" shadow" href="{{route('mostrarSerie',['serie' => $serie->id])}}" style="width: 100%; height: 100%;">
            <div class=" card text-bg-dark PeliculaDiv" style="width: 100%; height: 100%;">
                <img src="{{asset($serie->imagen)}}" class=" rounded card-img" alt="..." style="height: 100%;">
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
                    w = (AnchoPorcentaje - .0795) * ancho;
                } else if (ancho > pan1 && ancho <= pan0) {
                    w = (AnchoPorcentaje - .0455) * ancho;
                } else if (ancho < pan1 && ancho >= pan2) {
                    w = (AnchoPorcentaje + sumaPorcentaje) * ancho;
                } else if (ancho < pan2) {
                    w = ((AnchoPorcentaje + (sumaPorcentaje * 2)) + .08) * ancho;
                }
                divFotos.style.width = w + "px";
                divFotos.style.height = (w + (w * .3)) + "px";
                i++;
            }

        }
        return t;
    }
</script>

@endsection