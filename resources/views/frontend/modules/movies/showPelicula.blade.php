@extends('frontend.layout.vistaBaseMenu')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/styleShowMovie.css') }}">
@endpush
@section('content')
    <title>PELICULAS DE CHILL - {{ $pelicula->nombre }}</title>
    <div class="row pelicula row row-cols-2 row-cols-lg-2">

        <div id="Imagen" class="col zoom3 imgCol">
            <img class="rounded imagen" src="{{ asset($pelicula->ImagenCartel) }}" alt="">
        </div>

        <div class="col desCol">
            <p id="nombre" class="titulo"><strong>{{ $pelicula->nombre }}</strong></p>
            <p class="descripcion">
                {{ $pelicula->descripcion }}
            </p>
            @auth
                <?php $agregada = false;
                $listaId = null; ?>
                @foreach ($listas as $lista)
                    @if ($lista->idUser == auth()->user()->id)
                        @if ($pelicula->id == $lista->idPelicula)
                            <?php $agregada = true;
                            $listaId = $lista->id; ?>
                        @endif
                    @endif
                @endforeach
            @endauth

            <div class="d-flex">
                <a href="{{ route('verPelicula', ['pelicula' => $pelicula->id]) }}" id="btn-0"
                    class="btn shadow-lg boton3 btnVerPeli" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                        <path
                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                    </svg><strong> VER AHORA</strong></a>
                <a href="{{ route('verTailer', ['pelicula' => $pelicula->id]) }}" id="btn-1"
                    class="btn shadow-lg boton3 btnVerPeli" type="button"><strong>TRAILER</strong></a>

                @auth
                    @livewire('frontend.movie.buttom-add-list', ['movie' => $pelicula])
                @endauth
            </div>
        </div>

    </div>
    <section class="splide margin-bottom-2 margin-top-3"
        data-splide='{"perPage": 4,"breakpoints": {"1200": {"perPage": 3}, "850": {"perPage": 2}}}'>
        <ul class="splide__pagination opacity-0"></ul>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev opacity-0">
            </button>
            <button class="splide__arrow splide__arrow--next opacity-0">
            </button>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($peliculas as $pelicula)
                    <li class="splide__slide slide first-slide">
                        <a href="{{ route('show.movie', ['pelicula' => $pelicula->id]) }}">
                            <div class="cart-movie cart-movie-full zoom"
                                onmouseover="imagen('{{ asset($pelicula->ImagenCartel) }}')">
                                <div class="cart-movie-img">
                                    <img src="{{ asset($pelicula->ImagenCartel) }}" alt="...">
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var menu = document.getElementById('MenuInicio');
        menu.style.opacity = 1;
    </script>

    <script>
        let elms = document.getElementsByClassName('splide');
        let splide = new Array(elms.length);
        for (let i = 0; i < elms.length; i++) {
            splide[i] = new Splide(elms[i], {
                perPage: 4,
                perMove: 1,
                drag: 'free',
                padding: '3rem'
            }).mount();
        }
    </script>

    <script>
        function obtener(t) {
            let ancho = document.documentElement.clientWidth;
            var pan1 = 900;
            var pan2 = 650;
            var i = 0;

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
