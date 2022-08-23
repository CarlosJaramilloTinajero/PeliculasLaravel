@extends('vistaBaseMenu')

@section('content')
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
$otro = false;
$catnMax = 4;
$cant = 0;
$aux = 0;
foreach ($peliculas as $peliculaf) {
  $aux++;
  if ($aux > 4) {
    $cant++;
    $aux = 1;
  }
}

?>

<img style="transition: all .7s ease-in-out; opacity: 0; box-shadow: inset 0 0 2rem rgba(49, 138, 172, 0.5), 0 0 2rem rgba(49, 138, 172, 0.4);  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset($peliculas[0]->ImagenCartel)}}');" id="ImagenFondo" onload="var img= document.getElementById('ImagenFondo'); img.style.opacity=1;" class="fixed-top ImagenFondoInicio d-block" src="{{asset($peliculas[0]->ImagenCartel)}}" alt="">


<!--Primer slide -->
<section id="capa1" class="splide fixed-top " style="margin-top: 23%;">
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
          <center>
            <div id="divPrimerSlide{{$divs1}}">
              <img style="margin-top: 4.5%; margin-bottom: 4.4%; height: 90%;" onmouseover="var img = document.getElementById('ImagenFondo');  img.src='{{asset($pelicula->ImagenCartel)}}';  img.style.opacity=0;" src="{{asset($pelicula->ImagenCartel)}}" class=" PeliculaDiv rounded " alt="...">

            </div>
          </center>
        </a>
      </li>
      <?php $divs1++;
      ?>
      @endforeach
    </ul>

  </div>
</section>






<!-- //Segundo slide -->
<section class="splide " style="margin-top: 52%;">
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
      <li class="splide__slide zoom">
        <a href="{{route('mostrarPelicula',['pelicula' => $pelicula->id])}}">
          <div id="divSegundoSlide{{$pel}}">

            <center>
              <div class="card carta shadow-lg  rounded ">
                <img src="{{$pelicula->ImagenCartel}}" class="card-img-top PeliculaDiv" alt="..." style="height: 60%; border: 0px;">
                <div class="card-body" style="background-color: rgb(43, 39, 39); height: 30%;">
                  <h5 class="card-title">{{$pelicula->nombre}}</h5>
                  @foreach ($categorias as $categoria)
                  <?php if ($categoria->id == $pelicula->categoria_id) { ?>
                    <p class="card-text"><small>{{$categoria->nombre}} <span class="color-container_inicio" style="background-color:{{$categoria->Color}}"></span></small></p>
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

    splide.on('resized', function() {
      ancho = document.documentElement.clientWidth;

      if (ancho > pan0) {
        splide.options.padding = '5rem';

      }

      if (ancho > pan2 && ancho < pan1 && t) {
        splide.options.perPage = 3;


      } else if (ancho < pan2) {
        splide.options.perPage = 2;
      }

      t = false;

      if (ancho > 1000) {
        t = true;
      }
    });

    splide.mount();
  }
</script>

<script>
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
      var divFotos = div.getElementsByClassName('card');
      var divh5 = div.getElementsByTagName('h5');
      var divp = div.getElementsByTagName('p');
      var divspan = div.getElementsByTagName('span');

      //Estilo de las imagenes
      for (var z = 0; z < divFotos.length; z++) {
        var divU = div.getElementsByClassName('card')[z];
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

    //Imagen fondo
    let anchoImagen = document.documentElement.clientWidth;
    var AnchoPorcentajeImagen = 1;
    var AltoPorcentajeImagen = .4;
    var wImagen = AnchoPorcentajeImagen * anchoImagen;
    var hImagen = AltoPorcentajeImagen * anchoImagen;

    var divImagen = document.getElementById('ImagenFondo');
    divImagen.style.width = wImagen + "px";
    divImagen.style.height = hImagen + "px";
    if (ancho < 600) {
      divImagen.style.marginTop = "76px";
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
      // div.style.margin = "left " + (ancho * .005) + "px";
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

    return t;
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
  <section style="margin-top:3%; class="shadow-lg" class="splide">
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
           <center> <div  id="divCategoria' . $divs3 . '">
            
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