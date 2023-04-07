@extends('frontend.layout.vistaBaseMenu')
@section('content')
<title>Temporadas - {{$serie->nombre}}</title>
<div class="container w-55 p-5" style="margin-top: 100px;">
    <h2 class="">Temporadas agregadas - {{$serie->nombre}}</h2>
    <a href="{{route('agregarTemporada',['serie' => $serie->id])}}" style="margin-top: 10px;" class="btn btn-primary">Agregar temporada</a><br>
    <br>
    @if (session('success'))
    <h5 class="alert alert-success">{{session('success')}}</h5>
    @endif
    @if (session('error'))
    <h5 class="alert alert-danger">{{session('error')}}</h5>
    @endif



    <table class="table table-striped Tabla">
        <tr>
            <th>#</th>
            <th>Numero</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        <?php $y = 0; ?>
        @foreach ($temporadas as $temporada)
        @if ($temporada->serie_id == $serie->id)
        <tr>
            <?php $y++; ?>
            <td>{{$y}}</td>
            <td>{{$temporada->numero}}</td>
            <?php
            $cant = strlen($temporada->descripcion);
            $x = str_split($temporada->descripcion);
            $aux = "";
            $maxPalabras = 10;
            if ($cant > $maxPalabras) {
                for ($i = 0; $i < $maxPalabras; $i++) {
                    $aux .= $x[$i];
                }
            } else {
                $aux = $temporada->descripcion;
            }

            ?>
            <td style="max-width: 200px;">{{$aux}}...</td>
            <td><a href="{{asset($temporada->imagen)}}" target="_blank"><img src="{{asset($temporada->imagen)}}" alt="" class="ImagenTabla"></a></td>
            <td>
                <a class="btn btn-secondary btn-sm" style="margin-top: 10px;" href="{{route('showTemporada',['serie' => $serie->id, 'temporada' => $temporada])}}">Modificar</a>
                <a class="btn btn-secondary btn-sm" style="margin-top: 10px;" href="">Episodios</a>
                <button type="button" style="margin-top: 10px;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{$temporada->id}}">Elimiar</button>
            </td>
        </tr>
        @endif




        <div class="modal fade" id="modal-{{$temporada->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Eliminar temporada</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Esta seguro de eliminar la temporada <strong>{{$temporada->numero}}</strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <form action="{{route('eliminarTemporada',['temporada' => $temporada->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </table>
</div>
<br>
<script>
    var menu = document.getElementById('MenuInicio');
    menu.style.opacity = 1;
</script>
@endsection