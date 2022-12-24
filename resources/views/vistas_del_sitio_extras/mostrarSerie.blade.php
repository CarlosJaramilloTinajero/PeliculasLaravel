@extends('vistaBaseMenu')
@section('content')
<title>PELICULAS DE CHILL - SERIE</title>
<style>
    #capa2 {
        position: absolute;
        z-index: 3;
    }

    #ImagenFondo2 {
        position: absolute;
        z-index: 0;

    }
</style>

<style>
    .fondo {
        background-color: black;
        opacity: .3;
        width: 100%;
        position: absolute;
        height: 60%;
    }

    .divInfo {
        margin-left: 40px;
        margin-top: 40px;
        max-width: 1000px;

    }

    .nombre {
        color: white;
        font-size: 30px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .desc {
        font-size: 25px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: rgb(226, 226, 226);
    }

    .temporadas {
        margin-top: 38%;
    }
</style>
<img style="transition: all .7s ease-in-out; opacity: 0; box-shadow: inset 0 0 2rem rgba(49, 138, 172, 0.5), 0 0 2rem rgba(49, 138, 172, 0.4); height: 85%;" id="ImagenFondo2" onload="var img= document.getElementById('ImagenFondo2'); img.style.opacity=.4;" class="fixed-top ImagenFondoInicio d-block" src="{{asset($serie->imagen)}}" alt="">

<div class="divInfo fixed-top" id="capa2">
    <h6 class="nombre" id="nombre">{{$serie->nombre}}</h6>
    <h6 class="desc" id="descripcion">{{$serie->descripcion}}</h6>
</div>

<div class="temporadas">
    <h1>Temporada 1</h1>
</div>

<script>
    function scroll() {
        var y = window.pageYOffset;
        let ancho = document.documentElement.clientWidth;

        //Menu
        var menu = document.getElementById('MenuInicio');
        if (y < 500) {
            menu.style.opacity = ((y / 4) / 100);
        } else {
            menu.style.opacity = 1;
        }
    }

    function obtener(t) {
        let ancho = document.documentElement.clientWidth;

        //Descripcion, nombre pelicula
        var descripcion = document.getElementById('descripcion');
        var nombre = document.getElementById('nombre');
        if (ancho < 1150 && ancho > 700) {
            descripcion.style.fontSize = "18px";
            nombre.style.fontSize = "28px";
        } else if (ancho <= 700) {
            descripcion.style.fontSize = "15px";
            nombre.style.fontSize = "22px";
        } else {
            descripcion.style.fontSize = "21px";
            nombre.style.fontSize = "33px";
        }
        if (ancho < 500) {
            descripcion.style.opacity = 0;
        } else {
            descripcion.style.opacity = 1;
        }
        if (ancho <= 767) {
            nombre.style.marginTop = "30px";
        } else {
            nombre.style.marginTop = "105px";
        }

        //Imagen fondo
        let anchoImagen = document.documentElement.clientWidth;
        var AnchoPorcentajeImagen = 1;
        var AltoPorcentajeImagen = .4;
        var wImagen = AnchoPorcentajeImagen * anchoImagen;
        var hImagen = AltoPorcentajeImagen * anchoImagen;

        var divImagen = document.getElementById('ImagenFondo2');
        divImagen.style.width = wImagen + "px";
        if (ancho < 600) {
            divImagen.style.height = (hImagen + 60) + "px";
        } else {
            divImagen.style.height = hImagen + "px";
        }
        return t;
    }
</script>

@endsection