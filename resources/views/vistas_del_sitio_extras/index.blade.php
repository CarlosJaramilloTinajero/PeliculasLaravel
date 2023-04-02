@extends('vistaBaseMenu')
@section('content')
<title>PELICULAS DE CHILL - INICIO</title>
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

  function obtener(t) {
    let ancho = document.documentElement.clientWidth;
    var w = 0;
    var h = 0;
    var i = 0;

    var pan1 = 900;
    var pan2 = 650;

    //Segundo Slide
    if (ancho >= pan1) {
      var AnchoPorcentajeP = .200;
      var AltoPorcentajeP = .325;
    } else if (ancho < pan1 && ancho > pan2) {
      var AnchoPorcentajeP = .250;
      var AltoPorcentajeP = .42;
    } else if (ancho < pan2) {
      var AnchoPorcentajeP = .320;
      var AltoPorcentajeP = .52;
    }

    w = AnchoPorcentajeP * ancho;
    h = AltoPorcentajeP * ancho;
    i = 0;
    while (document.getElementById('divSegundoSlide' + i)) {
      var div = document.getElementById('divSegundoSlide' + i);
      var divFotos = div.getElementsByClassName('carta');
      var divh5 = div.getElementsByTagName('h5');
      var divp = div.getElementsByTagName('p');
      var divspan = div.getElementsByTagName('span');

      //Estilo de las imagenes
      for (var z = 0; z < divFotos.length; z++) {
        var divU = div.getElementsByClassName('carta')[z];
        divU.style.width = w + "px";
        divU.style.height = h + "px";
        divU.style.opacity = 1;
        divU.style.marginLeft = (ancho * .005) + "px";
      }

      //Estilo de los h5
      for (var z = 0; z < divh5.length; z++) {
        var divU = div.getElementsByTagName('h5')[z];
        if (ancho >= 1100) {

          divU.style.fontSize = (ancho * 0.015) + "px";
        } else if (ancho < 1100) {
          divU.style.fontSize = "14px";
        }
      }
      //Estilo etiquetas p
      for (var z = 0; z < divp.length; z++) {
        var divU = div.getElementsByTagName('p')[z];
        if (ancho >= 1100) {
          divU.style.fontSize = (ancho * 0.0134) + "px";
        } else if (ancho < 1100) {
          divU.style.fontSize = "14px";
        }
      }
      //Estilo etiquetas span
      for (var z = 0; z < divspan.length; z++) {
        var divU = div.getElementsByTagName('span')[z];
        divU.style.width = (ancho * 0.0134) + "px";
        divU.style.height = (ancho * 0.0134) + "px";
      }

      i++;
    }

    //Letras Categorias
    i = 0;
    while (document.getElementById('LetrasSlide' + i)) {
      var l = document.getElementById('LetrasSlide' + i);
      if (ancho < 900) {
        if (i == 0) {
          l.style.marginTop = "60px";
        } else {
          l.style.marginTop = "30px";
        }
      } else {
        if (i == 1) {
          l.style.marginTop = (.048 * ancho) + "px";
        } else {
          l.style.marginTop = (.013 * ancho) + "px";
        }
      }

      if (ancho > 950) {
        l.style.fontSize = (.018 * ancho) + "px";
      } else {
        l.style.fontSize = "13px";
      }

      l.style.opacity = 1;
      i++;
    }


    //Primer slider imagenes
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
    var restarMax = 100;
    i = 0;
    while (document.getElementById('divPrimerSlide' + i)) {
      var div = document.getElementById('divPrimerSlide' + i);
      div.style.width = w + "px";
      div.style.height = (w + 2) + "px";
      div.style.opacity = 1;
      i++;
    }


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
      i++;
    }

    // Categorias slide
    if (ancho >= pan1) {
      var AnchoPorcentaje = .200;
      var AltoPorcentaje = .345;
    } else if (ancho < pan1 && ancho > pan2) {
      var AnchoPorcentaje = .250;
      var AltoPorcentaje = .42;
    } else if (ancho < pan2) {
      var AnchoPorcentaje = .320;
      var AltoPorcentaje = .52;
    }
    w = AnchoPorcentaje * ancho;
    h = AltoPorcentaje * ancho;

    i = 0;
    while (document.getElementById('divCategoria' + i)) {
      var div = document.getElementById('divCategoria' + i);
      var imga = div.getElementsByTagName('img')[0];
      div.style.width = w + "px";
      div.style.height = (h + 2) + "px";
      div.style.opacity = 1;
      // imga.style.boxShadow = "0 0 " + (ancho * .02) + "px rgba(0, 0, 0, 4), 0 0 " + (ancho * .02) + "px rgba(0, 0, 0, 4)";
      i++;
    }

    return t;
  }
</script>

<style>
  .carta {
    position: relative;
    width: 302px;
    height: 240px;
    z-index: 1;
    -webkit-box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
    box-shadow: -1vw 1vw 1vw 0px rgba(0, 0, 0, 0.75);
    transition: box-shadow .7s ease-in-out;
    border-radius: 2%;
    overflow: hidden;
  }

  .carta:hover {
    -webkit-box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
    box-shadow: -1.4vw 1.4vw 1vw 0px rgba(0, 0, 0, 0.75);
  }

  .carta .bodyCarta {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #1b1c19;
    height: 35%;

  }

  .carta img {
    transition: height 1s ease-in-out;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 65%;
  }

  .carta:hover img {
    transition: height .3s ease-in-out;
    height: 100%;
    top: 0;
    left: 0;
  }

  .carta:hover .bodyCarta {
    transition: background-color 1s ease-in-out;
    transition: height 1s ease-in-out;
    left: 0;
    height: 100%;
    background-color: #1b1c197c;
  }

  .carta:hover h5,
  .carta:hover p {
    transition: text-shadow 1s ease-in-out;
    text-shadow: 0 0 1.5vw rgba(255, 255, 255, 0.9), 0 0 1.5vw rgba(255, 255, 255, 0.9);
  }

  .carta:hover .bodyCarta p {
    opacity: .75;
  }

  .enMedio {
    position: absolute;
    width: 90%;
    height: max-content;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);

  }

  .color-container_inicio {
    width: 1%;
    height: 1%;
    min-width: 10px;
    min-height: 10px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: -1.2%;
    margin-left: 2%;
  }

  #capa1 {
    position: absolute;
    z-index: 2;
  }

  .imagenFondoD {
    width: 100%;
    height: 100%;
    transition: all .8s ease-in-out;
    opacity: .8;
  }

  .imagenFondoDiv {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    width: 100vw;
    height: 35vw;
    -webkit-box-shadow: 0px 0px 10vw 5vw rgba(0, 0, 0, 0.9);
    -moz-box-shadow: 0px 0px 10vw 5vw rgba(0, 0, 0, 0.9);
    box-shadow: 0px 0px 10vw 5vw rgba(0, 0, 0, 0.9);
  }

  .imagenFondoDiv::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
    -webkit-box-shadow: inset 0px 0px 40vw 5vw rgba(0, 0, 0, 0.9);
    -moz-box-shadow: inset 0px 0px 40vw 5vw rgba(0, 0, 0, 0.9);
    box-shadow: inset 0px 0px 40vw 5vw rgba(0, 0, 0, 0.9);
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
    transition: opacity 2s ease-in-out;

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

  .opaciti-0 {
    opacity: 0;
    transition: opacity 3s ease-in-out;
  }

  .PeliculaDiv {
    width: 100%;
    height: 90%;
    object-fit: cover;
  }

  .PeliculaDiv:hover {
    border: 2px white solid;
  }
</style>


<?php
$aux = 0;
foreach ($peliculas as $peliculaf) {
  $aux++;
}

?>

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

@if ($aux>0)
<div class="imagenFondoDiv">
  <img class=" d-block imagenFondoD" id="ImagenFondo" src="{{asset($peliculas[0]->ImagenCartel)}}" alt="">
</div>
@else
<img src="" id="ImagenFondo" alt="...">
@endif
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
            <img style="margin-top: 4.5%; visibility: hidden; margin-bottom: 4.4%; height: 90%;" class=" PeliculaDiv rounded" alt="...">

          </div>
        </a>
      </li>
      <?php $divsf++;
      ?>
      @endforeach
    </ul>

  </div>
</section>


<!--Primer slide -->
<section id="capa1" class="splide fixed-top" style="margin-top: 23%;">
  <ul class="splide__pagination opacity-0"></ul>

  <div class="splide__arrows">
    <button class="splide__arrow splide__arrow--prev opacity-0">

    </button>
    <button class="splide__arrow splide__arrow--next opacity-0">

    </button>
  </div>

  <div class="splide__track">
    <ul class="splide__list">
      <?php
      $divs1 = 0; ?>
      @foreach ($peliculas as $pelicula)
      <li class="splide__slide zoom">
        <a href="{{route('mostrarPelicula',['pelicula' => $pelicula->id])}}">
          <div id="divPrimerSlide{{$divs1}}" class="opaciti-0">
            <img style=" margin-top: 4.5%; margin-bottom: 4.4%; height: 90%;" onmouseover="imagen('{{asset($pelicula->ImagenCartel)}}')" src="{{asset($pelicula->ImagenCartel)}}" class="rounded PeliculaDiv" alt="...">
          </div>
        </a>
      </li>
      <?php $divs1++;
      ?>
      @endforeach
    </ul>

  </div>
</section>

@if ($aux>0)
<!-- //Segundo slide -->
<section id="segundoSlide" class="splide " style="margin-top: 52vw;">
  <ul class="splide__pagination opacity-0"></ul>

  <div class="splide__arrows">
    <button class="splide__arrow splide__arrow--prev opacity-0">

    </button>
    <button class="splide__arrow splide__arrow--next opacity-0">

    </button>
  </div>

  <div class="splide__track">
    <h6 id="LetrasSlide0" class="subTitulo opaciti-0"><strong>Recomendado para tí</strong> </h6>
    <ul class="splide__list">

      <?php $pel = 0 ?>
      @foreach ($peliculas as $pelicula)
      <li class="splide__slide" style="padding-bottom: 3.5%;">
        <a href="{{route('mostrarPelicula',['pelicula' => $pelicula->id])}}">
          <div id="divSegundoSlide{{$pel}}" class="zoom">
            <center>
              <div class="carta opaciti-0">
                <img src="{{asset($pelicula->ImagenCartel)}}" alt="..." style="box-shadow: none;">
                <div class="bodyCarta">
                  <div class="enMedio">
                    <h5>{{$pelicula->nombre}}</h5>
                    @foreach ($categorias as $categoria)
                    <?php if ($categoria->id == $pelicula->categoria_id) { ?>
                      <p><small>{{$categoria->nombre}} <span class="color-container_inicio" style="background-color:{{$categoria->Color}}"></span></small></p>
                    <?php } ?>
                    @endforeach
                  </div>

                </div>
              </div>
            </center>

          </div>
        </a>
      </li>
      <?php $pel++; ?>
      @endforeach
    </ul>
  </div>
</section>

<?php
$divs3 = 0;
$i = 1;
?>

<!-- Por categoria -->
@foreach ($categorias as $categoria)
<?php
$contadorDePeliculas = 0;
foreach ($peliculas as $pelicula) {
  if ($categoria->id == $pelicula->categoria_id) {
    $contadorDePeliculas++;
  }
}
?>
@if ($contadorDePeliculas > 0)

<?php
$categoriaS = $categoria;

$categoriaPel = null;
foreach ($categorias as $categoriaE) {
  if ($categoriaE->id == $categoriaS->id) {
    $categoriaPel = $categoriaE;
  }
}
?>

<section style="margin-top:3%;" class="splide">
  <ul class="splide__pagination opacity-0"></ul>

  <div class="splide__arrows">
    <button class="splide__arrow splide__arrow--prev opacity-0">

    </button>
    <button class="splide__arrow splide__arrow--next opacity-0">

    </button>
  </div>
  <div class="splide__track">
    <h6 id="LetrasSlide{{$i}}" class="subTitulo opaciti-0"><strong>{{$categoriaPel->nombre}}</strong> </h6>
    <ul class="splide__list">';
      @foreach ($peliculas as $pelicula)

      @if ($pelicula->categoria_id == $categoriaS->id)

      <li class="splide__slide zoom">
        <a href="{{route('mostrarPelicula', ['pelicula' => $pelicula->id])}}">
          <center>
            <div id="divCategoria{{$divs3}}" style="height:90%;" class="opaciti-0">

              <img src="{{asset($pelicula->ImagenCartel)}}" class=" PeliculaDiv rounded" alt="...">
            </div>
          </center>
        </a>
      </li>

      <?php
      $divs3++;
      ?>
      @endif
      @endforeach
    </ul>
  </div>
</section>

<?php
$i++;
?>
@endif
@endforeach
@endif
<script>
  let ancho = document.documentElement.clientWidth;

  var elms = document.getElementsByClassName('splide');
  var pan0 = 1750;
  var pan1 = 900;
  var pan2 = 650;
  var Arreglo = null;
  var splide = new Array(elms.length);
  for (var i = 0; i < elms.length; i++) {
    splide[i] = new Splide(elms[i], {
      perPage: 2,
      perMove: 1,
      drag: 'free',
      padding: '3rem'
    });


    splide[i].mount();



    splide[i].on('resized', function() {
      var t = true;
      var panActual = 0;
      var pan0 = 1750;
      var pan_1 = 1749;
      var pan1 = 900;
      var pan2 = 650;
      let ancho = document.documentElement.clientWidth;
      for (var j = 0; j < splide.length; j++) {
        if (ancho > pan0 && t) {
          splide[j].options.padding = '8rem';
          splide[j].options.perPage = 4;
          panActual = pan0;

        } else
        if (ancho > pan1 && ancho < pan0 && t) {
          splide[j].options.perPage = 4;
          panActual = pan_1;
        } else
        if (ancho > pan2 && ancho < pan1 && t) {
          splide[j].options.perPage = 3;

          panActual = pan1;
        } else
        if (ancho < pan2 && t) {
          splide[j].options.perPage = 2;
          panActual = pan2;
        }

        t = false;

        if (ancho > panActual || ancho < panActual) {
          t = true;
        }
      }
    });

  }
</script>
@endsection