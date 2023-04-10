@extends('frontend.layout.vistaBaseMenu')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/styleIncio.css') }}">
@endpush
@section('content')
    <title>Lista</title>

    <section class="splide" data-splide='{"perPage": 4,"breakpoints": {"1200": {"perPage": 3}, "850": {"perPage": 2}}}'>

        <ul class="splide__pagination opacity-0"></ul>

        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev opacity-0">

            </button>
            <button class="splide__arrow splide__arrow--next opacity-0">

            </button>
        </div>
        <div class="splide__track">
            <div class="margin-top-4"></div>

            @if (count($user->movies) > 0)
                <h5 id="LetrasSlide0" style="margin-bottom : 20px;"><strong>Tu lista</strong> </h5>
            @else
                <center>
                    <h5 id="LetrasSlide0" style="margin-bottom : 20px;"><strong>Lista vacia</strong> </h5>
                </center>
            @endif
            @livewire('frontend.movie.list-movies')
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
            var w = 0;
            var h = 0;

            //Letras Categorias
            i = 0;
            while (document.getElementById('LetrasSlide' + i)) {
                var l = document.getElementById('LetrasSlide' + i);
                // if (ancho < 800) {
                //     l.style.marginTop = "3px";
                // } else {
                //     l.style.marginTop = (.01 * ancho) + "px";
                // }
                // if (ancho > 950) {
                //     l.style.fontSize = (.013 * ancho) + "px";
                // } else {
                //     l.style.fontSize = "13px";
                // }
                i++;
            }
            return t;
        }
    </script>
@endsection
