<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=10, initial-scale=1.0">
  <title>PELICULAS DE CHILL</title>
  <meta name="google" value="notranslate">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="/splide-4.0.7/dist/css/splide.min.css">
  <script src="/splide-4.0.7/dist/js/splide.min.js"></script>
  <link rel="shortcut icon" href="/Imagenes/Icono/icon.png">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/helpers/ratio/">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



  <style>
    .zoom {
      transition: all .7s ease;
    }

    .zoom:hover {
      transform: scale(1.08);
    }

    .zoom2 {
      transition: all .9s ease;
    }

    .zoom2:hover {
      transform: scale(1.05);
    }

    .zoom3 {
      transition: transform 1s;
    }

    .zoom3:hover {
      transform: scale(1.025);
    }


    .boton3 {
      color: white !important;
      /* font-size: 20px; */
      /* font-weight: 500; */
      padding: 0.5em 1.2em;
      background: rgba(0, 0, 0, 0);
      border: 2px solid white;
      /* border-color: #318aac; */
      transition: all 1s ease;
      /* position: relative; */
    }

    .transicion {
      transition: all 1.5s ease;
    }

    .boton3:hover {
      background: white;
      color: black !important;
    }

    .pruebaB {
      transition: all 1s ease;
    }

    .pruebaB:hover {
      border-bottom: 2px solid white;
    }

    .boton5 {
      color: white !important;
      padding: 0.5em 1.2em;
      transition: all 1s cubic-bezier(0.19, 1, 0.22, 1);
    }

    .boton5:hover {
      box-shadow: inset 0 0 20px rgba(49, 138, 172, 0.5), 0 0 20px rgba(49, 138, 172, 0.4);
      outline-color: rgba(49, 138, 172, 0);
      outline-offset: 80px;
      text-shadow: 1px 1px 6px #fff;
    }



    .MostrarContenidos {
      /* width: 100%; */
      /* height: max-content; */
      /* position: absolute; */
      /* margin-top: 60px; */
      /* margin-left: auto; */
      /* margin-right: auto; */
      margin-left: 2.2%;
    }

    .botonesCategorias {
      background-color: gray;
      color: white;
      padding: 10px;
      margin-left: 30px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .botonesCategorias:hover {
      background-color: white;
      color: black;
    }

    .splideCategorias {
      width: 100%;
      height: 30px;

    }

    .cardd:hover {
      border-top: 55px solid white;
      border: 5px solid white;
    }

    .ImagenFondoInicio {
      width: 100%;
      height: 70%;
      /* position: absolute; */
    }

    .Tabla {
      width: 100%;
    }

    .ImagenTabla {
      width: 25px;
      height: 35px;
    }

    a {
      text-decoration: none;
      color: white;
    }

    h6 {
      color: white;
      font-size: large;
    }

    h5,
    p {
      color: white;
      font-size: large;
    }

    body {
      background-color: rgb(26, 26, 27);
      /* background-color: rgb(20, 20, 20); */
      /* background-color: white; */
    }

    .contenedor {
      height: 55%;
    }

    .contenedor2 {
      height: 50%;
    }

    .splide {
      position: relative;
      visibility: visible;
    }

    .ImagenVistaInicio {
      width: 100%;
      height: 90%;
      /* object-fit: cover; */

    }

    .PeliculaDiv {
      width: 100%;
      height: 90%;
      object-fit: cover;
      transition: transform 1s cubic-bezier(0.19, 1, 0.22, 1);

    }

    .PeliculaDiv:hover {
      border: 2px white solid;
      box-shadow: inset 0 0 2rem rgba(49, 138, 172, 0.5), 0 0 2rem rgba(49, 138, 172, 0.4);
      outline-color: rgba(49, 138, 172, 0);
      outline-offset: 80px;
      text-shadow: 1px 1px 6px #fff;

    }

    /* .boton5 {
      color: white !important;
      padding: 0.5em 1.2em;
      transition: all 1s cubic-bezier(0.19, 1, 0.22, 1);
    }

    .boton5:hover {
      box-shadow: inset 0 0 20px rgba(49, 138, 172, 0.5), 0 0 20px rgba(49, 138, 172, 0.4);
      outline-color: rgba(49, 138, 172, 0);
      outline-offset: 80px;
      text-shadow: 1px 1px 6px #fff;
    } */

    .carta {
      width: 302px;
      height: 240px;
      /* background-color: black; */
      /* margin-left: 100%; */
    }

    .cartaMotrarContenido {
      width: 302px;
      height: 220px;
      background-color: black;
      margin-left: 10px;

      padding-left: 1.3%;
      padding-bottom: 1%;
      margin-top: 3.5%;

    }

    .color-container_inicio {
      width: 15px;
      height: 15px;
      display: inline-block;
      border: radius 4px;
    }

    .color-container {
      width: 30px;
      height: 16px;
      display: inline-block;
      border: radius 4px;
    }

    .container {
      background-color: white;
      border: 5px solid black;
    }

    img {
      width: 100%;
      height: 540px;
      object-fit: cover;
      cursor: pointer;
    }

    .containerr {
      width: 100%;
      height: 540px;
      padding: 0px;
      background: lightgray;
      position: absolute;

      transform: translate(-50%, -50%);
    }

    h1 {
      /* padding-left: 5.5%;
      padding-top: 4%;
      font-size: xx-large; */

      margin-left: 30px;
      padding-top: 60px;
      font-size: xx-large;
      color: white;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .MenuCategorias {
      /* margin-top: 4.1%; */
      width: 100%;
      height: 220px;
      margin-top: 70px;
      /* position: absolute; */

    }

    .MenuCategorias2 {
      /* margin-top: 4.1%; */
      width: 100%;
      height: 150px;
      margin-top: 70px;
      /* position: absolute; */

    }

    .barraInicio {
      color: white;
      text-decoration: none;
      font-size: 16px;
      margin-left: 35px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .barraInicio2 {
      color: white;
      text-decoration: none;
      /* margin-left: 30px; */
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .menuDespeglegable1 {
      font-size: 18px;

    }

    .menuDespeglegable2 {
      font-size: 23px;

    }

    .popoverClass {
      background-color: gray;
      text-decoration: none;
      color: black;
      padding: 5px;
      border-radius: 13px;
      border: 2px black solid;
      font-size: 13px;
    }
  </style>
</head>
<script>
  var c = true;
</script>

<body onload=" c=obtener(c);" onresize=" c=obtener(c);">

  <header>
    <nav class="navbar fixed-top bg-dark shadow-lg">
      <div class="container-fluid  bg-dark">

        <!-- Visible solo el pantallas mas chicas que las lg -->
        <div class="d-lg-none">
          <a class="barraInicio2 boton5" href="{{route('extras')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
            </svg></a>

          <a class="barraInicio2 boton5" href="{{route('extrasPeliculas')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
              <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
            </svg></a>

          <a class="barraInicio2 boton5" href="{{route('extras')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-tv-fill" viewBox="0 0 16 16">
              <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
            </svg>
            <strong></strong></a>
          @auth
          <a class="barraInicio2 boton5" href="{{route('logout')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
              <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
            </svg></a>
        </div>
        @endauth
        @guest
        <a class="barraInicio2 boton5" href="{{route('login')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
          </svg></a>
      </div>
      @endguest



      <!-- Visible solo el pantallas mas grandes que las lg -->
      <div class="d-none d-lg-block">

        <a class="barraInicio  boton5" href="{{route('extras')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
          </svg>
          <strong>INICIO</strong></a>

        <a class="barraInicio boton5" href="{{route('extrasPeliculas')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
          </svg>
          <strong>PELICULAS</strong>
        </a>

        <a class="barraInicio boton5" href="{{route('extras')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-tv-fill" viewBox="0 0 16 16">
            <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
          </svg>
          <strong>SERIES</strong></a>

        @auth
        <a class="barraInicio boton5" href="{{route('logout')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
          </svg>
          <strong>CERRAR SESION</strong></a>
        @endauth

        @guest
        <a class="barraInicio boton5" href="{{route('login')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
          </svg>
          <strong>INICIAR SESION</strong></a>
        @endguest


      </div>


      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        @auth

        @if (auth()->user()->imgUser==null)
        <img class="shadow" src="{{asset('Imagenes/guest.png')}}" style="width: 45px; height: 45px; object-fit: cover; border-radius: 25px;" alt="">
        @else
        <img class="shadow" src="{{asset(auth()->user()->imgUser)}}" style="width: 45px; height: 45px; object-fit: cover; border-radius: 25px;" alt="">
        @endif

        @endauth

        @guest
        <img class="shadow" src="{{asset('Imagenes/guest.png')}}" style="width: 45px; height: 45px; object-fit: cover; border-radius: 25px;" alt="">
        @endguest
      </button>

      <div style=" background-color: white; width: 300px;" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div style=" background-color: black;" class="offcanvas-header">
          <h5 style="color: white;" class="offcanvas-title" id="offcanvasNavbarLabel">Peliculas de chill</h5>
          <button style=" background-color: rgb(80, 80, 80);" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            @auth
            <li class="nav-item">
              <p class="nav-link active menuDespeglegable1" aria-current="page">{{auth()->user()->name}}</p>
            </li>
            @endauth

            <li class="nav-item">
              <a class="nav-link active menuDespeglegable1" aria-current="page" href="{{route('extras')}}">Inicio</a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link menuDespeglegable1" aria-current="page" href="{{route('cuenta')}}">Cuenta</a>
            </li>
            @endauth
            <li class="nav-item">
              @auth
              <a class="nav-link menuDespeglegable1" href="{{route('logout')}}">Cerrar sesion</a>
              @endauth
              @guest
              <a class="nav-link menuDespeglegable1" href="{{route('login')}}">Iniciar sesion</a>
              @endguest
            </li>
            @auth
            @if (auth()->user()->name == "admin")
            <li class="nav-item">
              <a class="nav-link menuDespeglegable1" href="{{route('pelicula.create')}}">Agregar pelicula</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menuDespeglegable1" href="{{route('pelicula.index')}}">Peliculas agregadas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menuDespeglegable1" href="{{route('categoria.create')}}">Agregar categoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menuDespeglegable1" href="{{route('categoria.index')}}">Categorias agregadas</a>
            </li>
            @endif
            @endauth
          </ul>
        </div>
      </div>
      </div>
    </nav>
  </header>

  @yield('content')

  <footer style="background-color: rgb(20, 20, 20); padding-top: 80px; padding-bottom: 10px; margin-top: 40px;">
    <center>
      <div>
        <p style="color: white; font-size: 12px;">
          Sitio web Desarrollado por Carlos Daniel Jaramillo Tinajero
        </p>
        <div class="d-flex justify-content-center mb-3">
          <div class="p-2">
            <p class="col" style="max-width: 150px; color: white; font-size: 11px; text-align: center;">
              FrameWorks utilizados <br>
              Laravel <br>
              BootStrap <br>
            </p>
          </div>
          <div class="p-2">
            <p class="col" style="max-width: 150px; color: white; font-size: 11px; text-align: center;">
              Lenguajes utilizados <br>
              PHP <br>
              HTML <br>
              JavaScript <br>
              MySql <br>
              CSS
            </p>
          </div>
          <div class="p-2">
            <p class="col" style="max-width: 150px; color: white; font-size: 11px; text-align: center;">
              Librerias utilizadas <br>
              Splide<br>
            </p>
          </div>
        </div>
        <p style="color: white; font-size: 12px;">https://github.com/CarlosJaramilloTinajero/PeliculasLaravel</p>
      </div>
    </center>
  </footer>

  <script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
      return new bootstrap.Tooltip(popoverTriggerEl)
    })
  </script>
</body>



</html>