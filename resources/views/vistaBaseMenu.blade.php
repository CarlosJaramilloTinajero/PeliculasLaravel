<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=10, initial-scale=1.0">
    <meta name="google" value="notranslate">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="/splide-4.0.7/dist/css/splide.min.css">
  <script src="/splide-4.0.7/dist/js/splide.min.js"></script>
  <link rel="shortcut icon" href="/Imagenes/Icono/icon.png">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/helpers/ratio/">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <style>
    .ImagenSlideInicio {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .botonesMenuCuenta {
      /* margin-bottom: 180px; */
      margin-left: 20px;
      margin-right: 20px;
      text-decoration: none;
      color: white;
      opacity: .70;
      /* margin-top: 10px; */
      margin-top: 20px;
    }

    .TituloMenuCuenta {
      /* margin-bottom: 180px; */
      margin-left: 20px;
      margin-right: 20px;
      text-decoration: none;
      color: white;
      font-size: 18px;

      /* margin-top: 10px; */
      margin-top: 20px;
    }

    .botonesMenuCuenta:hover {
      color: white;
      opacity: 1;
    }

    a {
      text-decoration: none;
    }

    .popover__title {
      font-size: 18px;
      /* line-height: 36px; */
      /* text-decoration: none; */
      color: white;
      text-align: left;
      margin-right: 20px;
      padding: 0;
    }

    .popover__title:hover {
      color: white;
    }

    .popover__wrapper {
      position: relative;
      margin-top: 10px;
      /* display: inline-block; */
    }



    .popover__content2 {
      width: 250px;
      opacity: 0;
      visibility: hidden;
      position: absolute;
      left: -188px;
      top: 65px;
      transform: translate(0, 10px);
      background-color: black;
      border-radius: 4px;
      padding-top: 14px;
      padding-bottom: 20px;
      /* padding-right: 20px; */
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
      /* width: auto; */
    }

    .popover__content2:before {
      position: absolute;
      z-index: -1;
      content: "";
      right: calc(20% - 16px);
      top: -8px;
      border-style: solid;
      border-width: 0 10px 10px 10px;
      border-color: transparent transparent black transparent;
      transition-duration: 0.3s;
      transition-property: transform;
    }

    .popover__wrapper:hover .popover__content2 {
      z-index: 10;
      opacity: 1;
      visibility: visible;
      transform: translate(0, -20px);
      transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97);
    }

    .popover__content {
      width: 250px;
      opacity: 0;
      visibility: hidden;
      position: absolute;
      left: -136px;
      top: 65px;
      transform: translate(0, 10px);
      background-color: black;
      border-radius: 4px;
      padding-top: 14px;
      padding-bottom: 20px;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
    }

    .popover__content:before {
      position: absolute;
      z-index: -1;
      content: "";
      right: calc(40% - 14px);
      top: -8px;
      border-style: solid;
      border-width: 0 10px 10px 10px;
      border-color: transparent transparent black transparent;
      transition-duration: 0.3s;
      transition-property: transform;
    }

    .popover__wrapper:hover .popover__content {
      z-index: 10;
      opacity: 1;
      visibility: visible;
      transform: translate(0, -20px);
      transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97);
    }

    .popover__message {
      text-align: center;
      margin-left: 10px;
      margin-right: 80px;
    }

    .botonesNav {
      margin-left: 30px;
      text-decoration: none;
      color: black;
    }

    .navBar {
      background-image: radial-gradient(circle at 84.87% 74.42%, #ff65b3 0, #ff59c0 10%, #ff4ecd 20%, #ff45d9 30%, #ff3fe6 40%, #f23cf2 50%, #d33ffe 60%, #ad46ff 70%, #7b4fff 80%, #0058ff 90%, #0060ff 100%);
    }

    .popover-title {
      color: blue;
      font-size: 15px;
    }

    .imagenPerfil {
      width: 55px;
      height: 55px;
      border-radius: 27.5px;

    }

    .imagenPerfilNav {
      width: 36px;
      height: 36px;
      border-radius: 16px;

    }
  </style>

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
      padding: 0.5em 1.2em;
      background: rgba(0, 0, 0, 0);
      border: 2px solid white;
      transition: all 1s ease;
    }

    .boton3:hover {
      background: white;
      color: black !important;
    }

    .transicion {
      transition: all 1.5s ease;
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

    .carta {
      width: 302px;
      height: 240px;
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
      margin-left: 30px;
      padding-top: 60px;
      font-size: xx-large;
      color: white;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .MenuCategorias {
      width: 100%;
      height: 220px;
      margin-top: 60px;
    }

    .MenuCategorias2 {
      width: 100%;
      height: 150px;
      margin-top: 60px;
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
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .menuDespeglegable1 {
      font-size: 18px;

    }

    .menuDespeglegable2 {
      font-size: 23px;

    }
  </style>

</head>
<script>
  var c = true;
</script>

<body onload="var c =true; c=obtener(c);" onresize="var c =true; c=obtener(c);" >

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

          <a class="barraInicio2 boton5" href="{{route('Series')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-tv-fill" viewBox="0 0 16 16">
              <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
            </svg>
            <strong></strong></a>
          @auth
          <a class="barraInicio2 boton5" href="{{route('Lista')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
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

        <a class="barraInicio boton5" href="{{route('Series')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-tv-fill" viewBox="0 0 16 16">
            <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
          </svg>
          <strong>SERIES</strong></a>

        @auth
        <a class="barraInicio boton5" href="{{route('Lista')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
          </svg>
          <strong>LISTA</strong></a>
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


      <div class="popover__wrapper">
        <div>

          @auth
          <?php
          $cant = strlen(auth()->user()->name);
          // echo $cant-1;
          $x = str_split(auth()->user()->name);
          $aux = "";
          $maxPalabras = 7;
          if ($cant - 1 > $maxPalabras) {
            for ($i = 0; $i < $maxPalabras; $i++) {
              $aux .= $x[$i];
            }
            // echo $aux;
          } else {
            $aux = auth()->user()->name;
          }

          ?>
          @if (auth()->user()->imgUser==null)
          <a class="popover__title d-none d-sm-block"><img class="imagenPerfilNav" src="{{asset('Imagenes/guest.png')}}" alt=""> {{$aux}}</a>
          <a class="popover__title d-sm-none"><img class="imagenPerfilNav" src="{{asset('Imagenes/guest.png')}}" alt=""></a>
          @else
          <a class="popover__title d-none d-sm-block"><img class="imagenPerfilNav" src="{{asset(auth()->user()->imgUser)}}" alt=""> {{$aux}}</a>
          <a class="popover__title d-sm-none"><img class="imagenPerfilNav" src="{{asset(auth()->user()->imgUser)}}" alt=""></a>
          @endif
          @endauth

          @guest
          <a href="{{route('login')}}" class="popover__title d-none d-sm-block"><img class="imagenPerfilNav" src="{{asset('Imagenes/guest.png')}}" alt=""> Inicia sesion</a>
          <a href="{{route('login')}}" class="popover__title d-sm-none"><img class="imagenPerfilNav" src="{{asset('Imagenes/guest.png')}}" alt=""></a>
          @endguest

        </div>

        @auth
        <div class="popover__content d-none d-sm-block">
          <p class="popover__message">
            @if (auth()->user()->imgUser==null)
            <img class="imagenPerfil" src="{{asset('Imagenes/guest.png')}}" alt="">
            @else
            <img class="imagenPerfil" src="{{asset(auth()->user()->imgUser)}}" alt="">
            @endif
            <small>Hola {{$aux}}</small>
          </p>
          <hr class="opacity-50">
          <a class="botonesMenuCuenta" href="{{route('cuenta')}}">Cuenta</a><br>
          <a class="botonesMenuCuenta" href="{{route('Lista')}}">Lista</a><br>
          @if (auth()->user()->name=="admin")
          <hr class="opacity-50">
          <h4 class="TituloMenuCuenta">Peliculas</h4>
          <a class="botonesMenuCuenta" href="{{route('pelicula.create')}}">Agregar</a><br>
          <a class="botonesMenuCuenta" href="{{route('pelicula.index')}}">Agregadas</a><br>
          <hr class="opacity-50">
          <h4 class="TituloMenuCuenta">Categorias</h4>
          <a class="botonesMenuCuenta" href="{{route('categoria.create')}}">Agregar</a><br>
          <a class="botonesMenuCuenta" href="{{route('categoria.index')}}">Agregadas</a><br>
          @endif

          <hr class="opacity-50">
          <a class="botonesMenuCuenta" href="{{route('logout')}}">Salir</a>
        </div>
        <div class="popover__content2 d-sm-none">
          <p class="popover__message">
            @if (auth()->user()->imgUser==null)
            <img class="imagenPerfil" src="{{asset('Imagenes/guest.png')}}" alt="">
            @else
            <img class="imagenPerfil" src="{{asset(auth()->user()->imgUser)}}" alt="">
            @endif
            <small>Hola {{$aux}}</small>
          </p>
          <hr class="opacity-50">
          <a class="botonesMenuCuenta" href="{{route('cuenta')}}">Cuenta</a><br>
          <a class="botonesMenuCuenta" href="{{route('Lista')}}">Lista</a><br>
          @if (auth()->user()->name=="admin")
          <hr class="opacity-50">
          <h4 class="TituloMenuCuenta">Peliculas</h4>
          <a class="botonesMenuCuenta" href="{{route('pelicula.create')}}">Agregar</a><br>
          <a class="botonesMenuCuenta" href="{{route('pelicula.index')}}">Agregadas</a><br>
          <hr class="opacity-50">
          <h4 class="TituloMenuCuenta">Categorias</h4>
          <a class="botonesMenuCuenta" href="{{route('categoria.create')}}">Agregar</a><br>
          <a class="botonesMenuCuenta" href="{{route('categoria.index')}}">Agregadas</a><br>
          @endif

          <hr class="opacity-50">
          <a class="botonesMenuCuenta" href="{{route('logout')}}">Salir</a>
        </div>
        @endauth
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