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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@1,500&family=Roboto+Flex:opsz,wght@8..144,600&display=swap" rel="stylesheet">

  <style>
    ::-webkit-scrollbar {
      background-color: transparent;
      width: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #2d7591c5;
      border-radius: 50px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: #2d7491;
    }

    footer {
      background-color: #060608;
      padding-top: 80px;
      padding-bottom: 10px;
      margin-top: 40px;
      -webkit-box-shadow: 0px 0px 5vw 1vw #060608;
      -moz-box-shadow: 0px 0px 5vw 1vw #060608;
      box-shadow: 0px 0px 5vw 1vw #060608;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-shadow: 0 0 4px rgba(255, 255, 255, 0.4);
    }

    footer p {
      font-size: 11.5px;
    }

    footer p a svg {
      margin-top: 20px;
    }

    footer p a svg:hover {
      fill: white;
    }

    footer strong {
      font-size: 13px;
      text-shadow: 0 0 8px rgba(255, 255, 255, .7);
    }

    .wid-0 {
      width: 10vw;
      height: 10vw;
    }

    .divCatalogoImagen {
      width: 22vw;
      height: 22vw;
    }

    .boton3 {
      color: white !important;
      padding: 0.5em 1.2em;
      background: transparent;
      border: 2px solid white;
      border-bottom: 4px solid white;
      transition: all .5s ease-in-out;
      text-shadow: 0 0 10px rgba(255, 255, 255, .5);
    }

    .boton3:hover {
      background-color: #3a5b6b;
      border: 2px #283b46 solid;
      border-bottom: 4px #283b46 solid;
      opacity: .85;
      scale: .97;
    }

    .botonesMenuCuentaDrop {
      color: white;
      opacity: .8;
    }

    .botonesMenuCuentaDrop:hover {
      opacity: 1;
      color: white;
    }

    .botonesMenuCuenta {
      opacity: .70;
      margin-left: 15px;
      margin-bottom: 10px;
      margin-top: 5px;
    }

    .botonesMenuCuenta a {
      text-decoration: none;
      color: white;
    }

    .botonesMenuCuenta:hover {
      opacity: 1;
    }

    .botonesMenuCuenta:hover a {
      text-shadow: 0 0 10px rgb(255, 255, 255);
    }

    a {
      text-decoration: none;
      color: white;
    }

    .popover__title {
      font-size: 18px;
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
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
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

    .popover__wrapper:hover .popover__content2,
    .popover__wrapper:focus .popover__content2 {
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

    .popover__wrapper:hover .popover__content,
    .popover__wrapper:focus .popover__content {
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
      border-radius: 50%;
      margin-top: -8px;
    }

    .zoom {
      transition: transform .5s ease-in-out;
    }

    .zoom:hover {
      transform: scale(1.06);
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

    .transicion {
      transition: all 1.5s ease;
    }

    .MostrarContenidos {
      margin-left: 2.2%;
    }

    .btn {
      padding: 10px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 500;
      transition: all .4s ease-in-out;
    }

    .botonesCategorias {
      margin-left: 30px;
      background-color: #3a5b6b;
      color: white;
      text-shadow: 0 0 10px rgba(255, 255, 255, .9);
      border: 2px #283b46 solid;
      border-bottom: 4px #283b46 solid;
    }

    .botonesCategorias:hover,
    .botonesCategorias:focus,
    .botonesCategorias:target {
      scale: .95;
      background-color: #22323c;
      border: 2px #283b46 solid;
      border-bottom: 4px #283b46 solid;
      color: white;
    }

    .selectBtn {
      background-color: #22323c;
      border: 2px #283b46 solid;
      border-bottom: 4px #283b46 solid;
      color: white;
    }

    .Tabla {
      width: 100%;
    }

    .ImagenTabla {
      width: 25px;
      height: 35px;
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
      background-color: #1e1d25;
      overflow-x: hidden;
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

    .bodyCarta h5,
    .bodyCarta p {
      font-family: 'Roboto Flex', sans-serif;
    }

    .bodyCarta p {
      opacity: .5;
    }

    .color-container {
      width: 30px;
      height: 16px;
      display: inline-block;
      border: radius 4px;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
      border: 5px solid black;
      border-radius: 10px;
      max-width: 1000px;
      width: 95%;
    }

    img {
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

    .barraInicio {
      color: white;
      text-decoration: none;
      font-size: 17px;
      margin-left: 45px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .barraInicio svg {
      margin-right: 5px;
      margin-top: -4px;
      margin-left: 14px;
      width: 20px;
      height: 20px;
    }

    .barraInicio strong {
      margin-right: 14px;
    }

    .boton5 {
      color: white !important;
      transition: all 1s ease-in-out;
      position: relative;
      text-align: center;
      z-index: 1;
      overflow: hidden;

    }

    .boton5:hover {
      text-shadow: 0 0 15px #fff;
      scale: 1.1;
    }

    .boton5::before {
      transition: 1s ease-in-out;
      content: "";
      z-index: -1;
      position: absolute;
      bottom: -6px;
      width: 0%;
      height: 3px;
      border-radius: 3px;
      left: 0%;
      background-color: white;
    }

    .boton5:hover::before {
      box-shadow: 0 0 10px rgba(255, 255, 255, .9), 0 0 10px rgba(255, 255, 255, .9);
      width: 100%;
    }

    .barraInicio2 {
      color: white;
      text-decoration: none;
      margin-right: 12px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .barraInicio2 svg {
      margin-left: 10px;
      margin-right: 10px;
      width: 20px;
      height: 20px;
    }

    .hrClass {
      width: 90%;
      border: 0;
      height: 2px;
      background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgb(255, 255, 255), rgba(255, 255, 255, 0));
      margin: 0 auto;
    }

    .menuInicio {
      width: 100%;
      height: 60px;
      opacity: 0;
      background-color: #060608ad;
      backdrop-filter: blur(10px);
      -webkit-box-shadow: 0px 0px 4vw .5vw rgba(0, 0, 0, 0.85);
      -moz-box-shadow: 0px 0px 4vw .5vw rgba(0, 0, 0, 0.85);
      box-shadow: 0px 0px 4vw .5vw rgba(0, 0, 0, 0.85);
    }
  </style>

</head>
<script>
  var c = true;

  function obtener(t) {
    return t;
  }
</script>

<body onload="var c =true; c=obtener(c);" onresize="var c =true; c=obtener(c);" onscroll="scroll();">

  <header>

    <div id="MenuInicio" class="menuInicio fixed-top"></div>
    <nav class="navbar fixed-top">
      <div class="container-fluid">

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
          $x = str_split(auth()->user()->name);
          $aux = "";
          $maxPalabras = 7;
          if ($cant - 1 > $maxPalabras) {
            for ($i = 0; $i < $maxPalabras; $i++) {
              $aux .= $x[$i];
            }
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
          <hr class="hrClass">
          <p class="botonesMenuCuenta"><a href="{{route('cuenta')}}">Cuenta</a></p>
          <p class="botonesMenuCuenta"><a href="{{route('Lista')}}">Lista</a></p>
          @if (auth()->user()->name=="admin")
          <hr class="hrClass">

          <div class="dropdown">
            <a style="border: none; margin-top: -6px; margin-left: 10px;" class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Peliculas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('pelicula.create')}}">Agregar pelicula</a></li>
              <li><a class="dropdown-item" href="{{route('pelicula.index')}}">Peliculas agregadas</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a style="border: none; margin-top: -6px; margin-left: 10px;" class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Series
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('create.series')}}">Agregar serie</a></li>
              <li><a class="dropdown-item" href="{{route('seriesAgregadas')}}">Series agregadas</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a style="border: none; margin-top: -6px; margin-left: 10px;" class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('categoria.create')}}">Agregar categoria</a></li>
              <li><a class="dropdown-item" href="{{route('categoria.index')}}">Categorias agregadas</a></li>
            </ul>
          </div>
          @endif

          <hr class="hrClass">
          <p class="botonesMenuCuenta"><a href="{{route('logout')}}">Salir</a></p>
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
          <hr class="hrClass">
          <p class="botonesMenuCuenta"><a href="{{route('cuenta')}}">Cuenta</a></p>
          <p class="botonesMenuCuenta"><a href="{{route('Lista')}}">Lista</a></p>
          @if (auth()->user()->name=="admin")
          <hr class="hrClass">

          <div class="dropdown">
            <a style="border: none; margin-top: -6px; margin-left: 10px;" class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Peliculas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('pelicula.create')}}">Agregar pelicula</a></li>
              <li><a class="dropdown-item" href="{{route('pelicula.index')}}">Peliculas agregadas</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a style="border: none; margin-top: -6px; margin-left: 10px;" class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Series
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('create.series')}}">Agregar serie</a></li>
              <li><a class="dropdown-item" href="{{route('seriesAgregadas')}}">Series agregadas</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a style="border: none; margin-top: -6px; margin-left: 10px;" class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('categoria.create')}}">Agregar categoria</a></li>
              <li><a class="dropdown-item" href="{{route('categoria.index')}}">Categorias agregadas</a></li>
            </ul>
          </div>
          @endif

          <hr class="hrClass">
          <p class="botonesMenuCuenta"><a href="{{route('logout')}}">Salir</a></p>
        </div>
        @endauth
      </div>
    </nav>
  </header>

  @yield('content')

  <footer>
    <center>
      <div>
        <p style="color: white;">
          Sitio web Desarrollado por <strong>Carlos Daniel Jaramillo Tinajero</strong><br>Proyecto en mejora constante
        </p>
        <div class="d-flex justify-content-center mb-3">
          <div class="p-2">
            <p class="col" style="max-width: 150px; color: white; text-align: center;">
              <strong>FrameWorks utilizados</strong><br>
              Laravel <br>
            </p>
          </div>
          <div class="p-2">
            <p class="col" style="max-width: 150px; color: white; text-align: center;">
              <strong>Lenguajes utilizados</strong><br>
              PHP <br>
              HTML <br>
              JavaScript <br>
              MySql <br>
              CSS <br>
              <a href="https://github.com/CarlosJaramilloTinajero/PeliculasLaravel" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                </svg>
              </a>
            </p>
          </div>
          <div class="p-2">
            <p class="col" style="max-width: 150px; color: white; text-align: center;">
              <strong>Librerias utilizadas</strong><br>
              Splide<br>
              BootStrap <br>
            </p>
          </div>
        </div>
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