@extends('vistaBaseMenu')
@section('content')
<div class="MenuCategorias bg-dark bg-gradient d-none d-lg-block">

    <div style="margin-top: 60px;" class="splide ">
        <h1 style="margin-bottom: 40px; font-size: 40px ">Peliculas - Todas las peliculas</h1>

        <div class="splide__track">
            <ul class="splide__list">


                <li class="splide__slide">
                    <a href="" selected class="btn botonesCategorias" style="background-color: white; color: black;">Todas las peliculas</a>
                </li>
                @foreach ($categorias as $categoria)
                <li class="splide__slide">
                    <a href="{{route('extrasPeliculas_porCategoria',['categoria' => $categoria->id])}}" class="btn  botonesCategorias">{{$categoria->nombre}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="MenuCategorias2 bg-dark bg-gradient d-lg-none">
    <div style="margin-left: 35px; padding-top: 60px; ">
        <!-- <h1 id="Cartel">Peliculas - </h1> -->
        <div class="nav-item dropdown">
            <a style="color: white; font-size: 21px;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Peliculas - Todas las peliculas
            </a>
            <ul class="dropdown-menu">
                @foreach ($categorias as $categoria)
                <li><a class="dropdown-item" href="{{route('extrasPeliculas_porCategoria',['categoria' => $categoria->id])}}">{{$categoria->nombre}}</a></li>
                @endforeach
                <!-- <li>
                    <hr class="dropdown-divider">
                </li> -->
            </ul>
        </div>


    </div>
</div>


<center>
    <div class="MostrarContenidos">

        <div class="card-group" id="divF">

            @foreach ($peliculas as $pelicula)
            <center>
                <a href="{{route('mostrarPelicula',['pelicula' => $pelicula->id])}}">
                    <div class="zoom2 card cartaMotrarContenido shadow ">
                        <img style="height: 100%;" src="{{asset($pelicula->ImagenCartel)}}" class="img-fluid ImagenPeliculaChica" alt="...">
                    </div>
                </a>

            </center>

            @endforeach

        </div>
</center>



</div>

<br><br>

<!-- <script>
    var splide = new Splide('.splide', {
        perPage: 14,
        rewind: true,
    });

    splide.mount();
</script> -->

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