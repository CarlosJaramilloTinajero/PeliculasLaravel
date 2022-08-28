@extends('vistaBaseMenu')
@section('content')
<title>Lista</title>
<!-- <center>
    <p style="margin-top: 100px;">PAGINA EN PROCESO</p>
</center> -->


<section style="margin-top: 89px;" class="splide">
    <ul class="splide__pagination opacity-0"></ul>

    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev opacity-0">

        </button>
        <button class="splide__arrow splide__arrow--next opacity-0">

        </button>
    </div>

    <div class="splide__track">
        <h6 id="LetrasSlide0" style="margin-bottom : 2%;"><strong>Tu lista</strong> </h6>
        <ul class="splide__list">
            <?php
            $s1 = 0;
            $peliculaM = null;
            ?>
            @foreach ($listas as $lista)
            @if ($lista->idUser == auth()->user()->id)

            @foreach ($peliculas as $pelicula)
            @if ($pelicula->id==$lista->idPelicula)
            <?php
            $peliculaM = $pelicula;
            ?>
            @endif
            @endforeach

            <li class="splide__slide zoom">
                <a href="{{route('mostrarPelicula', ['pelicula' => $peliculaM->id])}}">
                    <center>
                        <div class="row">
                            <div class="col">
                                <div id="divCategoria{{$s1}}" class="shadow" style="height:90%;">


                                    <img src="{{$peliculaM->ImagenCartel}}" class=" PeliculaDiv rounded" alt="...">

                                </div>
                            </div>
                            <form action="{{route('eliminarLista',['lista' => $lista->id])}}" class="col" style="position: absolute; margin-left: 43%;" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background-color: transparent; border: none;">
                                    <svg id="iconPlay-{{$s1}}" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>
                                </button>

                            </form>
                        </div>

                    </center>
                </a>
            </li>
            <?php
            $s1++;
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
        var w = 0;
        var h = 0;
        //Letras Categorias
        i = 0;
        while (document.getElementById('LetrasSlide' + i)) {
            var l = document.getElementById('LetrasSlide' + i);
            if (ancho < 800) {
                l.style.marginTop = "3px";
            } else {
                l.style.marginTop = (.01 * ancho) + "px";
            }
            if (ancho > 950) {
                l.style.fontSize = (.013 * ancho) + "px";
            } else {
                l.style.fontSize = "13px";
            }
            i++;
        }

        // Categorias slide
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
        w = AnchoPorcentaje * ancho;
        h = AltoPorcentaje * ancho;

        i = 0;
        while (document.getElementById('divCategoria' + i)) {
            var div = document.getElementById('divCategoria' + i);
            div.style.width = w + "px";
            div.style.height = (h + 2) + "px";
            // div.style.margin = "left " + (ancho * .005) + "px";
            i++;
        }

        //svg Boton
        i = 0;
        while (document.getElementById('iconPlay-' + i)) {
            var iconPlay = document.getElementById('iconPlay-' + i);
            if (ancho > 1700) {
                var aux = 1700;
                iconPlay.style.width = (aux * .016) + "px";
                iconPlay.style.height = (aux * .016) + "px";
            } else {
                if (ancho < 900) {
                    iconPlay.style.width = "18px";
                    iconPlay.style.height = "18px";
                } else {
                    iconPlay.style.width = (ancho * .016) + "px";
                    iconPlay.style.height = (ancho * .016) + "px";
                }
            }
            i++;
        }

        return t;
    }
</script>
@endsection