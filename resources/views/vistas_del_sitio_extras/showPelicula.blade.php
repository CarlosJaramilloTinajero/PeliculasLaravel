@extends('vistaBaseMenu')
@section('content')
<title>PELICULAS DE CHILL</title>

<style>
    .button2 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
<div class="row">

    <div id="Imagen" class="col-sm-12 col-md-6 transicion shadow-lg zoom3">
        <img class="rounded " style="object-fit: cover; width: 100%; height: 100%; margin-left: 10px;" src="{{asset($pelicula->ImagenCartel)}}" alt="">
    </div>

    <div class="col-sm-12 col-md-6">
        <p id="nombre" style="margin-top: 30px; margin-left: 10px; font-size: 33px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><strong>{{$pelicula->nombre}}</strong></p>
        <p id="descripcion" style="margin-top: 20px; font-size: 21px; font-family: sans-serif; margin-left: 10px;  max-width: 874px;">
            {{$pelicula->descripcion}}
        </p>
        @auth
        <?php $agregada = false;
        $listaId = null; ?>
        @foreach ($listas as $lista)
        @if ($lista->idUser == auth()->user()->id)
        @if ($pelicula->id == $lista->idPelicula)
        <?php $agregada = true;
        $listaId = $lista->id ?>
        @endif
        @endif
        @endforeach
        @endauth


        @auth
        @if ($agregada)
        <form action="{{route('eliminarLista',['lista' => $listaId])}}" method="POST">
            @method('DELETE')
            @else
            <form action="{{route('agregarLista',['pelicula' => $pelicula->id])}}" method="POST">
                @endif
                @endauth

                @guest
                <form action="">
                    @endguest


                    @csrf
                    <a href="{{route('verPelicula',['pelicula' => $pelicula->id])}}" id="btn-0" class="btn shadow-lg boton3" type="button"><svg id="iconPlay" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                        </svg><strong> VER AHORA</strong></a>
                    <a href="{{route('verTailer',['pelicula' => $pelicula->id])}}" id="btn-1" class="btn shadow-lg boton3" type="button"><strong>TRAILER</strong></a>

                    @auth
                    @if (!$agregada)
                    <button type="submit" id="btn-2" class="btn shadow-lg boton3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg>
                    </button>
                    @else
                    <button type="submit" id="btn-2" class="btn shadow-lg boton3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>
                    @endif
                    @endauth

                </form>


    </div>

</div>

<!-- <hr> -->
<section class="splide" style="margin-top: 5%;">
    <hr class="border opacity-10">
    <ul class="splide__pagination opacity-0"></ul>

    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev opacity-0">

        </button>
        <button class="splide__arrow splide__arrow--next opacity-0">

        </button>
    </div>
    <div class="splide__track">
        <h6 id="LetrasSlide0" style="margin-bottom: 2%;"><strong>Recomendado para ti</strong> </h6>
        <ul class="splide__list">
            <?php
            $divs1 = 0; ?>
            @foreach ($peliculas as $peliculaN)
            @if ($pelicula->id != $peliculaN->id)
            <li class="splide__slide zoom">
                <a href="{{route('mostrarPelicula',['pelicula' => $peliculaN->id])}}">
                    <div id="divPrimerSlide{{$divs1}}">
                        <img style="margin-top: 4.5%;" src="{{asset($peliculaN->ImagenCartel)}}" class="PeliculaDiv rounded" alt="">
                    </div>
                </a>
            </li>
            <?php $divs1++;
            ?>
            @endif

            @endforeach
        </ul>
    </div>
</section>



<script>
    let ancho = document.documentElement.clientWidth;

    var elms = document.getElementsByClassName('splide');
    var pan0 = 1750;
    var pan1 = 900;
    var pan2 = 650;
    for (var i = 0; i < elms.length; i++) {
        if (ancho > pan0) {
            var splide = new Splide(elms[i], {
                perPage: 4,
                perMove: 1,
                drag: 'free',
                padding: '8rem'
            });
        } else {
            var splide = new Splide(elms[i], {
                perPage: 4,
                perMove: 1,
                drag: 'free',
                padding: '3rem'
            });
        }



        var t = true;
        var panActual = 0;
        splide.on('resized', function() {
            // var t = true;
            var pan0 = 1750;
            var pan_1 = 1749;
            var pan1 = 900;
            var pan2 = 650;
            let ancho = document.documentElement.clientWidth;

            if (ancho > pan0 && t) {
                splide.options.padding = '8rem';
                splide.options.perPage = 4;
                panActual = pan0;

            } else
            if (ancho > pan1 && ancho < pan0 && t) {
                splide.options.padding = '3rem';
                splide.options.perPage = 4;
                panActual = pan_1;
            } else
            if (ancho > pan2 && ancho < pan1 && t) {
                splide.options.perPage = 3;
                splide.options.padding = '3rem';
                panActual = pan1;
            } else
            if (ancho < pan2 && t) {
                splide.options.perPage = 2;
                splide.options.padding = '3rem';
                panActual = pan2;

            }

            t = false;

            if (ancho > panActual || ancho < panActual) {
                t = true;
            }
        });

        splide.mount();
    }
</script>

<script>
    function obtener(t) {
        let ancho = document.documentElement.clientWidth;
        var pan1 = 900;
        var pan2 = 650;
        var i = 0;
        //Slider Peliculas
        if (ancho >= pan1) {
            var AnchoPorcentaje = .200;
            var AltoPorcentaje = .345;
        } else if (ancho < pan1 && ancho > pan2) {
            var AnchoPorcentaje = .250;
            var AltoPorcentaje = .3785;
        } else if (ancho < pan2) {
            var AnchoPorcentaje = .320;
            var AltoPorcentaje = .3785;
        }

        var w = AnchoPorcentaje * ancho;
        i = 0;
        while (document.getElementById('divPrimerSlide' + i)) {
            var div = document.getElementById('divPrimerSlide' + i);
            div.style.width = w + "px";
            div.style.height = (w + 2) + "px";
            // div.style.margin = "left " + (ancho * .005) + "px";
            i++;
        }

        //Letras Categorias
        i = 0;
        while (document.getElementById('LetrasSlide' + i)) {
            var l = document.getElementById('LetrasSlide' + i);
            if (ancho < 800) {
                l.style.marginTop = "30px";
            } else {
                l.style.marginTop = (.013 * ancho) + "px";
            }
            if (ancho > 950) {
                l.style.fontSize = (.013 * ancho) + "px";
            } else {
                l.style.fontSize = "13px";
            }
            i++;
        }

        //Imagen Pelicula
        var imagen = document.getElementById('Imagen');
        if (ancho < 900) {
            // imagen.style.marginTop = "95px";
            imagen.style.width = (900 * .4) + "px";
            imagen.style.height = (900 * .38) + "px";
        } else {
            imagen.style.width = (ancho * .4) + "px";
            imagen.style.height = (ancho * .38) + "px";
        }
        imagen.style.marginTop = "80px";


        //botones
        i = 0;
        while (document.getElementById('btn-' + i)) {
            var btn = document.getElementById('btn-' + i);
            var aux = 0;
            if (ancho > 1500) {
                aux = 1500;
            } else if (ancho < 900) {
                aux = 900;
            }
            if (aux == 0) {
                aux = ancho;

            }
            btn.style.fontSize = (aux * .014) + "px";

            btn.style.paddingLeft = (aux * .016) + "px";
            btn.style.paddingRight = (aux * .016) + "px";

            if (i == 1) {
                btn.style.paddingTop = (aux * .008) + "px";
                btn.style.paddingBottom = (aux * .008) + "px";
            }
            if (i == 2 || i == 3) {
                btn.style.borderRadius = (aux * .08) + "px";
                btn.style.paddingLeft = (aux * .0086) + "px";
                btn.style.paddingRight = (aux * .0086) + "px";
            }

            btn.style.marginTop = "25px";
            btn.style.marginLeft = "17px";
            if (ancho <= 1150) {
                btn.style.marginBottom = "18px";
            }
            i++;
        }

        //svg Boton
        var iconPlay = document.getElementById('iconPlay');
        if (ancho > 1500) {
            var aux = 1500;
            iconPlay.style.width = (aux * .025) + "px";
            iconPlay.style.height = (aux * .025) + "px";
        } else {
            if (ancho < 900) {
                iconPlay.style.width = "23px";
                iconPlay.style.height = "23px";
            } else {
                iconPlay.style.width = (ancho * .025) + "px";
                iconPlay.style.height = (ancho * .025) + "px";
            }

        }

        //Descripcion pelicula
        var descripcion = document.getElementById('descripcion');
        var nombre = document.getElementById('nombre');
        if (ancho < 1150) {
            descripcion.style.fontSize = "18px";
            nombre.style.fontSize = "28px";
        } else {
            descripcion.style.fontSize = "21px";
            nombre.style.fontSize = "33px";
        }
        if (ancho <= 767) {
            nombre.style.marginTop = "30px";
        } else {
            nombre.style.marginTop = "105px";
        }

        return t;
    }
</script>
@endsection