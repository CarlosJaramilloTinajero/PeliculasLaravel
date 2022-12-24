@extends('vistaBaseMenu')
@section('content')



<!-- Slide fantasma -->
<section class="splide" style="margin-top: -300%; position: absolute;">
    <ul class="splide__pagination opacity-0"></ul>

    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev opacity-0">

        </button>
        <button class="splide__arrow splide__arrow--next opacity-0">

        </button>
    </div>

    <div class="splide__track ">
        <ul class="splide__list ">
            <?php
            $divsf = 0; ?>
            @foreach ($peliculas as $peliculat)
            <li class="splide__slide zoom">
                <a href="{{route('mostrarPelicula',['pelicula' => $peliculat->id])}}">
                    <div id="divFanSlide{{$divsf}}">
                        <img style="margin-top: 4.5%; margin-bottom: 4.4%; height: 90%;" class=" PeliculaDiv rounded" alt="...">

                    </div>
                </a>
            </li>
            <?php $divsf++;
            ?>
            @endforeach
        </ul>

    </div>
</section>
<style>
    @media screen and (min-width: 1000px) {

        .descripcion {
            font-family: 'Plus Jakarta Sans', sans-serif;
            opacity: .9;
            font-size: 19px;
        }

        .titulo {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 22px;
        }

    }

    @media screen and (max-width: 1000px) {

        .descripcion {
            font-family: 'Plus Jakarta Sans', sans-serif;
            opacity: .9;
            font-size: 15px;
        }

        .titulo {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 19px;
        }

    }

    .splide__slide {
        padding-top: 1.5vw;
        padding-bottom: 1.5vw;
    }

    .splide__slide img {
        transition: box-shadow .5s ease-in-out;
        -webkit-box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
        box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
    }

    .splide__slide img:hover {
        -webkit-box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
        box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
    }

    .subTitulo {
        font-family: 'Plus Jakarta Sans', sans-serif;
        text-shadow: -3px 3px 5px rgba(0, 0, 0, 1);
        margin-bottom: 1%;
        /* font-family: 'Roboto Flex', sans-serif; */
    }



    .imgCol {
        width: 40%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 35px;
    }

    @media screen and (min-width:888px) {
        .desCol {
            width: 55%;
        }

        .pelicula {
            width: 95%;
            padding-top: 80px;
            margin: 0 auto;
        }
    }

    @media screen and (max-width:888px) {
        .desCol {
            width: 100%;
            margin: 0 auto;
        }

        .pelicula {
            width: 100%;
            padding-top: 80px;
            margin: 0 auto;
        }
    }

    .imagen {
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: box-shadow .7s ease-in-out;
        -webkit-box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
        box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
    }

    .imagen:hover {
        -webkit-box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
        box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
    }

    .btnVerPeli {
        margin-left: 5%;
        margin-bottom: 15px
    }

    .btnVerPeli svg {
        width: 1.5em;
        height: 1.5em;
    }
</style>
<title>PELICULAS DE CHILL - {{$pelicula->nombre}}</title>
<div class="row pelicula row row-cols-2 row-cols-lg-2">

    <div id="Imagen" class="col zoom3 imgCol">
        <img class="rounded imagen " src="{{asset($pelicula->ImagenCartel)}}" alt="">
    </div>

    <div class="col desCol">
        <p id="nombre" class="titulo"><strong>{{$pelicula->nombre}}</strong></p>
        <p class="descripcion">
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
                    <a href="{{route('verPelicula',['pelicula' => $pelicula->id])}}" id="btn-0" style="margin-left: 0;" class="btn shadow-lg boton3 btnVerPeli" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                        </svg><strong> VER AHORA</strong></a>
                    <a href="{{route('verTailer',['pelicula' => $pelicula->id])}}" id="btn-1" class="btn shadow-lg boton3 btnVerPeli" type="button"><strong>TRAILER</strong></a>

                    @auth
                    @if (!$agregada)
                    <button type="submit" id="btn-2" class="btn shadow-lg boton3 btnVerPeli">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg>
                    </button>
                    @else
                    <button type="submit" id="btn-2" class="btn shadow-lg boton3 btnVerPeli">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>
                    @endif
                    @endauth

                </form>


    </div>

</div>
<section class="splide" style="margin-top: 5%;">
    <hr class="hrClass">
    <ul class="splide__pagination opacity-0"></ul>

    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev opacity-0">

        </button>
        <button class="splide__arrow splide__arrow--next opacity-0">

        </button>
    </div>
    <div class="splide__track">
        <h6 id="LetrasSlide0" class="subTitulo"><strong>Recomendado para ti</strong> </h6>
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
    var menu = document.getElementById('MenuInicio');
    menu.style.opacity = 1;
</script>

<script>
    let ancho = document.documentElement.clientWidth;

    var elms = document.getElementsByClassName('splide');
    var pan0 = 1750;
    var pan1 = 900;
    var pan2 = 650;
    for (var i = 0; i < elms.length; i++) {
        var splide = new Splide(elms[i], {
            perPage: 2,
            perMove: 1,
            drag: 'free',
            padding: '3rem'
        });
        splide.mount();

        var t = true;
        var panActual = 0;
        splide.on('resized', function() {
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
    }
</script>

<script>
    function obtener(t) {
        let ancho = document.documentElement.clientWidth;
        var pan1 = 900;
        var pan2 = 650;
        var i = 0;


        //slide Fantasma
        if (ancho >= pan1) {
            var AnchoPorcentajef = .200;
            var AltoPorcentajef = .345;
        } else if (ancho < pan1 && ancho > pan2) {
            var AnchoPorcentajef = .250;
            var AltoPorcentajef = .3785;
        } else if (ancho < pan2) {
            var AnchoPorcentajef = .320;
            var AltoPorcentajef = .3785;
        }

        w = .1 * ancho;
        i = 0;
        while (document.getElementById('divFanSlide' + i)) {
            var div = document.getElementById('divFanSlide' + i);
            div.style.width = w + "px";
            div.style.height = (w + 2) + "px";
            // div.style.margin = "left " + (ancho * .005) + "px";
            i++;
        }

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
            var imga = div.getElementsByTagName('img')[0];
            div.style.width = w + "px";
            div.style.height = (w + 2) + "px";
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
        // imagen.style.marginTop = "80px";


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
            i++;
        }
        return t;
    }
</script>
@endsection