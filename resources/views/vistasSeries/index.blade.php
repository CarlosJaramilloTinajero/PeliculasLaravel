@extends('vistaBaseMenu')
@section('content')
<title>Seires</title>
<div class="container p-5" style="margin-top: 100px;">
    <h2 class="">Series agregadas</h2>
    <a href="{{route('create.series')}}" style="margin-top: 10px;" class="btn botonesCategorias">Agregar serie</a><br>
    <br>
    @if (session('success'))
    <h5 class="alert alert-success">{{session('success')}}</h5>
    @endif
    @if (session('error'))
    <h5 class="alert alert-danger">{{session('error')}}</h5>
    @endif



    <table class="table table-striped Tabla table-sm">
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        <?php $y = 0; ?>
        @foreach ($series as $serie)
        <tr>
            <?php $y++; ?>
            <td>{{$y}}</td>
            @foreach ($categorias as $categoria)
            <?php
            if ($categoria->id == $serie->categoria_id) {
                echo '<td style="background-color:' . $categoria->Color . '"><a href="' . route('categoria.show', ['categorium' => $categoria->id]) . '"><strong>' . $categoria->nombre . '</strong></a></td>';
            }
            ?>
            @endforeach
            <td>{{$serie->nombre}}</td>
            <?php
            $cant = strlen($serie->descripcion);
            $x = str_split($serie->descripcion);
            $aux = "";
            $maxPalabras = 10;
            if ($cant > $maxPalabras) {
                for ($i = 0; $i < $maxPalabras; $i++) {
                    $aux .= $x[$i];
                }
                // echo $aux;
            } else {
                $aux = $serie->descripcion;
            }

            ?>
            <td style="max-width: 200px;">{{$aux}}...</td>
            <td><a href="{{asset($serie->imagen)}}" target="_blank"><img src="{{asset($serie->imagen)}}" alt="" class="ImagenTabla"></a></td>
            <td>
                <!-- <a class="btn btn-secondary btn-sm" style="margin-top: 10px;" href="{{route('modificarSerie',['serie' => $serie->id])}}">Modificar</a> -->
                <!-- <a class="btn btn-secondary btn-sm" style="margin-top: 10px;" href="{{route('temporadasAgregadas',['serie' => $serie->id])}}">Temporadas</a> -->
                <!-- <button type="button" style="margin-top: 10px;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{$serie->id}}">Elimiar</button> -->
                <button type="button" class="btn btn-secondary  btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Acciones
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('modificarSerie',['serie' => $serie->id])}}">Modificar</a></li>
                    <li><a class="dropdown-item" href="{{route('temporadasAgregadas',['serie' => $serie->id])}}">Temporadas</a></li>
                    <li>
                        <form action="{{route('EliminarSerie',['serie' => $serie->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="dropdown-item" value="Eliminar">
                        </form>
                    </li>
                </ul>
            </td>
        </tr>



        <div class="modal fade" id="modal-{{$serie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Eliminar serie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Esta seguro de eliminar la serie <strong>{{$serie->nombre}}</strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <form action="{{route('EliminarSerie',['serie' => $serie->id])}}" method="POST">
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