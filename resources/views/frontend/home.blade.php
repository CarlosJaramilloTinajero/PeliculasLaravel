@extends('frontend.layout.vistaBaseMenu')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/styleIncio.css') }}">
@endpush
@section('content')
    <title>PELICULAS DE CHILL - INICIO</title>

    @if (count($peliculas) > 0)
        <div class="imagenFondoDiv">
            <img class=" d-block imagenFondoD" id="ImagenFondo" src="{{ asset($peliculas[0]->ImagenCartel) }}" alt="">
        </div>
    @else
        <img src="" id="ImagenFondo" alt="...">
    @endif

    <!--Primer slide -->
    <section id="capa1" class="splide margin-bottom-4"
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
                @foreach ($peliculas->take(8) as $pelicula)
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

    @if (count($relatedMovies) > 0)
        <!-- //Segundo slide -->
        <div class="splide-home"></div>
        <section class="splide"
            data-splide='{"perPage": 4,"breakpoints": {"1200": {"perPage": 3}, "850": {"perPage": 2}}}'>

            <ul class="splide__pagination opacity-0"></ul>

            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev opacity-0">

                </button>
                <button class="splide__arrow splide__arrow--next opacity-0">

                </button>
            </div>

            <div class="splide__track">
                <h6 class="subTitulo"><strong>Recomendado
                        para tí</strong> </h6>
                <ul class="splide__list">
                    @foreach ($relatedMovies as $pelicula)
                        <li class="splide__slide slide second-slide">
                            <a href="{{ route('show.movie', ['pelicula' => $pelicula['id']]) }}">
                                <div class="cart-movie cart-movie-full cart-movie-hover"
                                    style="box-shadow: -11px 11px 10px {{ str_replace(')', ', ' . $opacityBoxShadows . ');', $pelicula['categoryColor']) }}">
                                    <div class="cart-movie-img">
                                        <img src="{{ $pelicula['ImagenCartel'] }}" alt="">
                                    </div>
                                    {{-- <div class="cart-movie-body">
                                        <p class="name-movie">{{ $pelicula->nombre }}</p>
                                    </div> --}}
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <!-- Por categoria -->
        @foreach ($categorias as $categoria)
            @if (count($categoria->peliculas) > 0)
                <div class="splide-home"></div>
                <section class="splide"
                    data-splide='{"perPage": 4,"breakpoints": {"1200": {"perPage": 3}, "850": {"perPage": 2}}}'>

                    <ul class="splide__pagination opacity-0"></ul>

                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev opacity-0">

                        </button>
                        <button class="splide__arrow splide__arrow--next opacity-0">

                        </button>
                    </div>
                    <div class="splide__track">
                        <h6 class="subTitulo opaciti-0">
                            <strong>{{ $categoria->nombre }}</strong>
                        </h6>
                        <ul class="splide__list">
                            @foreach ($categoria->peliculas->take(13) as $pelicula)
                                <li class="splide__slide slide second-slide">
                                    <a href="{{ route('show.movie', ['pelicula' => $pelicula->id]) }}">
                                        <div class="cart-movie cart-movie-full cart-movie-hover"
                                            style="box-shadow: -8px 8px 8px {{ str_replace(')', ', ' . $opacityBoxShadows . ');', $categoria->Color) }}">
                                            <div class="cart-movie-img">
                                                <img src="{{ $pelicula->ImagenCartel }}" alt="">
                                            </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            @endif
        @endforeach
    @endif
@endsection

@section('script')
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
        function scroll() {
            // var y = window.scrollY;
            var y = window.pageYOffset;
            let ancho = document.documentElement.clientWidth;

            //Menu
            var menu = document.getElementById('MenuInicio');
            if (y < 200) {
                menu.style.opacity = ((y / 2) / 100);
            } else {
                menu.style.opacity = 1;
            }
        }

        function obtener(t) {}
    </script>

    <script>
        let idT = null;

        function imagen(src) {
            var img = document.getElementById('ImagenFondo');
            if (src != img.src) {
                img.style.opacity = 0;

                window.clearTimeout(idT);
                idT = setTimeout(() => {
                    img.src = src;
                    var idT2 = setTimeout(() => {
                        img.style.opacity = .8;
                        window.clearTimeout(idT2);
                    }, 300);
                    window.clearTimeout(idT);
                }, 700);
            }
        }
    </script>
@endsection
