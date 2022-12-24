@extends('vistaBaseMenu')
@section('content')
<title>Editar categoria</title>
<div class="container p-5" style="margin-top: 100px;">


    <h2>Editar la categoria</h2>
    @if (session('success'))
    <h5 class="alert alert-success">{{session('success')}}</h5>
    @endif

    @error('nombre')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    @error('descripcion')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    <br>
    <form method="POST" action="{{route('categoria.update',['categorium' => $categoria->id])}}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="Name" class="form-label">Nombre de la categoria</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="{{$categoria->nombre}}">
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Descripcion de la categoria</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="descripcion" value="{{$categoria->descripcion}}">
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Tipo de categoria
            </label>
            <select class="form-select" name="Tipo">
                @if ($categoria->Tipo == "serie")
                <option selected value="serie">Serie</option>
                <option value="pelicula">Pelicula</option>
                @else
                <option value="serie">Serie</option>
                <option selected value="pelicula">Pelicula</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Color de la categoria</label>
            <input type="color" class="form-control" name="color" value="{{$categoria->Color}}" }>
        </div>

        <button type="submit" class="btn botonesCategorias">Modificar</button>
    </form>
</div>
<br>
<div class="container p-5 ">
    <h2>
        @if ($categoria->Tipo == "serie")
        Series
        @else
        Peliculas
        @endif
        agregadas con esta categoria</h2>
    <table class="table table-striped Tabla table-sm">
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        <?php $j = 0; ?>
        @foreach ($tipo as $tipoE)
        @if ($tipoE->categoria_id==$categoria->id)
        <tr>
            <?php $j++; ?>
            <td>{{$j}}</td>

            <td style="background-color: {{$categoria->Color}};"><a href="{{route('categoria.show', ['categorium' => $categoria->id])}}"><strong>{{$categoria->nombre}}</strong></a></td>

            <td>{{$tipoE->nombre}}</td>
            <?php
            $x = str_split($tipoE->descripcion);
            $aux = "";
            $maxPalabras = 10;
            if ($x > $maxPalabras) {
                for ($i = 0; $i < $maxPalabras; $i++) {
                    $aux .= $x[$i];
                }
                // echo $aux;
            } else {
                $aux = $tipoE->descripcion;
            }

            ?>
            @if ($categoria->Tipo == "serie")
            <td style="max-width: 200px;">{{$aux}}...</td>
            <td><a href="{{asset($tipoE->imagen)}}" target="_blank"><img src="{{asset($tipoE->imagen)}}" alt="" class="ImagenTabla"></a></td>
            <td>
                <!-- <a class="btn btn-secondary" style="margin-top: 10px;" href="{{route('modificarSerie',['serie' => $tipoE->id])}}">Modificar</a> -->
                <!-- <button type="button" style="margin-top: 10px;" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$tipoE->id}}">Elimiar</button> -->
                <button type="button" class="btn btn-secondary  btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Acciones
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('modificarSerie',['serie' => $tipoE->id])}}">Modificar</a></li>
                    <li>
                        <form action="{{route('EliminarSerie',['serie' => $tipoE->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="dropdown-item" value="Eliminar">
                        </form>
                    </li>
                </ul>
            </td>
            @endif
            @if ($categoria->Tipo == "pelicula")
            <td style="max-width: 200px;">{{$aux}}...</td>
            <td><a href="{{asset($tipoE->ImagenCartel)}}" target="_blank"><img src="{{asset($tipoE->ImagenCartel)}}" alt="" class="ImagenTabla"></a></td>
            <td>
                <!-- <a class="btn btn-secondary" style="margin-top: 10px;" href="{{route('pelicula.show',['pelicula' => $tipoE->id])}}">Modificar</a> -->
                <!-- <button type="button" style="margin-top: 10px;" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$tipoE->id}}">Elimiar</button> -->
                <button type="button" class="btn btn-secondary  btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Acciones
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('pelicula.show',['pelicula' => $tipoE->id])}}">Modificar</a></li>
                    <li>
                        <form action="{{route('pelicula.destroy',['pelicula' => $tipoE->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="dropdown-item" value="Eliminar">
                        </form>
                    </li>
                </ul>
            </td>
            @endif

        </tr>

        <div class="modal fade" id="modal-{{$tipoE->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Eliminar pelicula</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Esta seguro de eliminar la
                        @if ($categoria->Tipo=="serie")
                        serie
                        @else
                        pelicula
                        @endif
                        <strong>{{$tipoE->nombre}}</strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                        @if ($categoria->Tipo=="serie")
                        <form action="{{route('EliminarSerie',['serie' => $tipoE->id])}}" method="POST">
                            @else
                            <form action="{{route('pelicula.destroy',['pelicula' => $tipoE->id])}}" method="POST">
                                @endif

                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>

                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </table>
</div>
<br>
<script>
    var menu = document.getElementById('MenuInicio');
    menu.style.opacity = 1;
</script>
<script>
    function obtener(t) {
        return t;
    }
</script>
@endsection