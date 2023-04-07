<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=10, initial-scale=1.0">
    <meta name="google" value="notranslate">




    {{-- BootStrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    {{-- Splide --}}
    <link rel="stylesheet" href="/splide-4.0.7/dist/css/splide.min.css">
    <script src="/splide-4.0.7/dist/js/splide.min.js"></script>

    {{-- Icons --}}
    <link rel="shortcut icon" href="/Imagenes/Icono/icon.png">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@1,500&family=Roboto+Flex:opsz,wght@8..144,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styleGlobal.css') }}">

    @stack('css')
    @livewireStyles
</head>
<script>
    var c = true;

    function obtener(t) {
        return t;
    }
</script>

<body onload="var c =true; c=obtener(c);" onresize="var c =true; c=obtener(c);" onscroll="scroll();">

    @include('frontend.layout.header')

    @yield('content')

    @include('frontend.layout.footer')

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Tooltip(popoverTriggerEl)
        })
    </script>

    @yield('script')
    @livewireScripts
</body>

</html>
