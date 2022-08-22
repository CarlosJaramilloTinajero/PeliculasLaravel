@extends('vistaBaseMenu')
@section('content')
<div class="row">

    <div id="Imagen" class="col-sm-12 col-md-6 transicion shadow-lg zoom3">
        <img class="rounded " style="object-fit: cover; width: 100%; height: 100%; margin-left: 10px;" src="{{asset($pelicula->ImagenCartel)}}" alt="">
    </div>

    <div class="col-sm-12 col-md-6">
        <p id="nombre" style="margin-top: 30px; margin-left: 10px; font-size: 33px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><strong>{{$pelicula->nombre}}</strong></p>
        <p id="descripcion" style="margin-top: 20px; font-size: 21px; font-family: sans-serif; margin-left: 10px;  max-width: 874px;">
            {{$pelicula->descripcion}}
        </p>
        <a href="{{route('verPelicula',['pelicula' => $pelicula->id])}}" id="btn-0" class="btn shadow2 button2 shadow-lg boton3" type="button"><svg id="iconPlay" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
            </svg><strong> VER AHORA</strong></a>
        <a href="{{route('verTailer',['pelicula' => $pelicula->id])}}" id="btn-1" class="btn shadow2 button2 shadow-lg boton3" type="button"><strong>TRAILER</strong></a>

    </div>

</div>


<style>
    .button2 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>

<script>
    function obtener(t) {
        let ancho = document.documentElement.clientWidth;
        var imagen = document.getElementById('Imagen');

        if (ancho < 900) {
            // imagen.style.marginTop = "95px";
            imagen.style.width = (900 * .4) + "px";
            imagen.style.height = (900 * .38) + "px";
        } else {
            imagen.style.width = (ancho * .4) + "px";
            imagen.style.height = (ancho * .38) + "px";
        }
        imagen.style.marginTop = "95px";


        var i = 0;
        while (document.getElementById('btn-' + i)) {
            var btn = document.getElementById('btn-' + i);
            var aux = 0;
            if (ancho > 1500) {
                aux = 1500;
                btn.style.fontSize = (aux * .014) + "px";

                btn.style.paddingLeft = (aux * .016) + "px";
                btn.style.paddingRight = (aux * .016) + "px";

                if (i == 1) {
                    btn.style.paddingTop = (aux * .008) + "px";
                    btn.style.paddingBottom = (aux * .008) + "px";
                }
            } else if (ancho < 900) {
                aux = 900;
                btn.style.fontSize = (aux * .014) + "px";

                btn.style.paddingLeft = (aux * .016) + "px";
                btn.style.paddingRight = (aux * .016) + "px";

                if (i == 1) {
                    btn.style.paddingTop = (aux * .008) + "px";
                    btn.style.paddingBottom = (aux * .008) + "px";
                }
            } else {
                btn.style.fontSize = (ancho * .014) + "px";

                btn.style.paddingLeft = (ancho * .016) + "px";
                btn.style.paddingRight = (ancho * .016) + "px";

                if (i == 1) {
                    btn.style.paddingTop = (ancho * .008) + "px";
                    btn.style.paddingBottom = (ancho * .008) + "px";
                }

            }
            btn.style.marginTop = "25px";
            btn.style.marginLeft = "17px";
            if (ancho <= 1150) {
                btn.style.marginBottom = "18px";
            }


            i++;
        }

        var iconPlay = document.getElementById('iconPlay');

        if (ancho > 1500) {
            var aux = 1500;
            iconPlay.style.width = (aux * .03) + "px";
            iconPlay.style.height = (aux * .03) + "px";
        } else {
            if (ancho < 900) {
                iconPlay.style.width = "23px";
                iconPlay.style.height = "23px";
            } else {
                iconPlay.style.width = (ancho * .03) + "px";
                iconPlay.style.height = (ancho * .03) + "px";
            }

        }

        var descripcion = document.getElementById('descripcion');
        var nombre = document.getElementById('nombre');
        if (ancho < 1150) {
            descripcion.style.fontSize = "18px";
            nombre.style.fontSize = "28px";
        } else {
            descripcion.style.fontSize = "21px";
            nombre.style.fontSize = "33px";
        }
        if (ancho <= 767) {
            nombre.style.marginTop = "30px";
        } else {
            nombre.style.marginTop = "105px";
        }

        return t;
    }
</script>
@endsection