@extends('vistaBaseMenu')
@section('content')
<title>PELICULAS DE CHILL - INICIO</title>
<style>
  #capa1 {
    position: absolute;
    z-index: 1;
  }

  #ImagenFondo {
    position: absolute;
    z-index: 0;

  }

  #background {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    /* background-size: cover; */
  }
</style>


<?php
$aux = 0;
foreach ($peliculas as $peliculaf) {
  $aux++;
}

?>

@if ($aux>0)
<img style="transition: all .7s ease-in-out; opacity: 0; box-shadow: inset 0 0 2rem rgba(49, 138, 172, 0.5), 0 0 2rem rgba(49, 138, 172, 0.4);  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset($peliculas[0]->ImagenCartel)}}');" id="ImagenFondo" onload="var img= document.getElementById('ImagenFondo'); img.style.opacity=.8;" class="fixed-top ImagenFondoInicio d-block" src="{{asset($peliculas[0]->ImagenCartel)}}" alt="">
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



<!-- data-splide='{"padding":"3rem","perPage":4,"drag":"free","permove":1}' -->
<!--Primer slide -->
<section id="capa1" class="splide fixed-top" style="margin-top: 23%;">
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
      $divs1 = 0; ?>
      @foreach ($peliculas as $pelicula)
      <li class="splide__slide zoom">
        <a href="{{route('mostrarPelicula',['pelicula' => $pelicula->id])}}">
          <div id="divPrimerSlide{{$divs1}}">
            <img style="margin-top: 4.5%; margin-bottom: 4.4%; height: 90%;" onmouseover="var img = document.getElementById('ImagenFondo');  img.src='{{asset($pelicula->ImagenCartel)}}';  img.style.opacity=0;" src="{{asset($pelicula->ImagenCartel)}}" class="shadow-lg rounded PeliculaDiv" alt="...">

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
<section id="segundoSlide" class="splide " style="margin-top: 47%;">
  <ul class="splide__pagination opacity-0"></ul>

  <div class="splide__arrows">
    <button class="splide__arrow splide__arrow--prev opacity-0">

    </button>
    <button class="splide__arrow splide__arrow--next opacity-0">

    </button>
  </div>

  <div class="splide__track">
    <h6 id="LetrasSlide0" style="margin-bottom: 2%;"><strong>Recomendado para ti</strong> </h6>
    <ul class="splide__list">

      <?php $pel = 0 ?>
      @foreach ($peliculas as $pelicula)
      <li class="splide__slide ">
        <a href="{{route('mostrarPelicula',['pelicula' => $pelicula->id])}}">
          <div id="divSegundoSlide{{$pel}}">

            <center>
              <div id="divCarta" class="carta zoom rounded">
                <img src="{{asset($pelicula->ImagenCartel)}}" alt="..." style="height: 60%; border: 0px;" class="shadow-lg">
                <div class="shadow-lg" style="background-color: rgb(43, 39, 39); height: 30%;">
                  <h5>{{$pelicula->nombre}}</h5>
                  @foreach ($categorias as $categoria)
                  <?php if ($categoria->id == $pelicula->categoria_id) { ?>
                    <p><small>{{$categoria->nombre}} <span class="color-container_inicio" style="background-color:{{$categoria->Color}}"></span></small></p>
                  <?php } ?>
                  @endforeach
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


<!-- Slides por categoria -->
<?php $categoriaS = null;
$divs3 = 0;
$i = 1;
foreach ($categorias as $categoria) {
  $contadorDePeliculas = 0;
  foreach ($peliculas as $pelicula) {
    if ($categoria->id == $pelicula->categoria_id) {
      $contadorDePeliculas++;
    }
  }
  if ($contadorDePeliculas > 0) {
    $categoriaS = $categoria;
    $divs3 = splide($peliculas, $categorias, $categoriaS, $divs3, $i);
    $i++;
  }
}

?>
@endif

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
      var AltoPorcentajeP = .345;
    } else if (ancho < pan1 && ancho > pan2) {
      var AnchoPorcentajeP = .250;
      var AltoPorcentajeP = .3785;
    } else if (ancho < pan2) {
      var AnchoPorcentajeP = .320;
      var AltoPorcentajeP = .3785;
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



    //Primer slide
    if (ancho < 900) {
      S1 = document.getElementById('capa1');
      S2 = document.getElementById('segundoSlide');
      if (S1 != null && S2 != null) {
        S1.style.marginTop = "23%";
        if (ancho < pan2) {
          S2.style.marginTop = "50%";
        } else {
          S2.style.marginTop = "47%";
        }
      }

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
        l.style.fontSize = (.013 * ancho) + "px";
      } else {
        l.style.fontSize = "13px";
      }
      i++;
    }

    //Imagen fondo
    let anchoImagen = document.documentElement.clientWidth;
    var AnchoPorcentajeImagen = 1;
    var AltoPorcentajeImagen = .4;
    var wImagen = AnchoPorcentajeImagen * anchoImagen;
    var hImagen = AltoPorcentajeImagen * anchoImagen;

    var divImagen = document.getElementById('ImagenFondo');
    divImagen.style.width = wImagen + "px";
    if (ancho < 600) {
      divImagen.style.height = (hImagen + 60) + "px";
    } else {
      divImagen.style.height = hImagen + "px";
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
      var imga = div.getElementsByTagName('img')[0];
      div.style.width = w + "px";
      div.style.height = (h + 2) + "px";
      imga.style.boxShadow = "0 0 " + (ancho * .02) + "px rgba(0, 0, 0, 4), 0 0 " + (ancho * .02) + "px rgba(0, 0, 0, 4)";
      i++;
    }

    return t;
  }
</script>

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



<?php
function splide($peliculas, $categorias, $categoriaS, $divs3, $i)
{

  $otro = false;
  $cant = 0;
  $aux = 0;
  foreach ($peliculas as $peliculaf) {
    if ($peliculaf->categoria_id == $categoriaS->id) {
      $aux++;
      if ($aux > 5) {
        $cant++;
        $aux = 1;
      }
    }
  }

  $categoriaPel = null;
  foreach ($categorias as $categoriaE) {
    if ($categoriaE->id == $categoriaS->id) {
      $categoriaPel = $categoriaE;
    }
  }


  echo '
  <section style="margin-top:3%;" class="splide">
  <ul class="splide__pagination opacity-0"></ul>

  <div class="splide__arrows">
  <button class="splide__arrow splide__arrow--prev opacity-0">

  </button>
  <button class="splide__arrow splide__arrow--next opacity-0">

  </button>
</div>
    <div class="splide__track">
      <h6 id="LetrasSlide' . $i . '" style="margin-bottom : 2%;"><strong>' . $categoriaPel->nombre . '</strong> </h6>
      <ul class="splide__list">';
  foreach ($peliculas as $pelicula) {
    if ($pelicula->categoria_id == $categoriaS->id) {

      echo '<li class="splide__slide zoom">
        <a href="' . route('mostrarPelicula', ['pelicula' => $pelicula->id]) . '">
           <center> <div  id="divCategoria' . $divs3 . '" style="height:90%;">
            
                  <img src="' . $pelicula->ImagenCartel . '" class=" PeliculaDiv rounded" alt="...">
            
          </div>  </center>
        </a>
      </li>';
      $divs3++;
    }
  }

  echo '
    </ul>
  </div>
</section>
    ';
  return $divs3;
}
?>