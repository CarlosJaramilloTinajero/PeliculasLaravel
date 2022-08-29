@extends('vistaBaseMenu')
@section('content')
<title>Editar categoria</title>
<div class="container w-50 p-5" style="margin-top: 100px;">


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
            <label for="color" class="form-label">Color de la categoria</label>
            <input type="color" class="form-control" name="color" value="{{$categoria->Color}}" }>
        </div>

        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
</div>
<br>
<div class="container w-55 p-5 ">
    <h2>Peliculas agregadas con esta categoria</h2>
    <table class="table table-striped Tabla">
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        <?php $j = 0; ?>
        @foreach ($peliculas as $pelicula)
        @if ($pelicula->categoria_id==$categoria->id)
        <tr>
            <?php $j++; ?>
            <td>{{$j}}</td>

            <td style="background-color: {{$categoria->Color}};"><a href="{{route('categoria.show', ['categorium' => $categoria->id])}}"><strong>{{$categoria->nombre}}</strong></a></td>

            <td>{{$pelicula->nombre}}</td>
            <?php
            $x = str_split($pelicula->descripcion);
            $aux = "";
            $maxPalabras = 10;
            if ($x > $maxPalabras) {
                for ($i = 0; $i < $maxPalabras; $i++) {
                    $aux .= $x[$i];
                }
                // echo $aux;
            } else {
                $aux = $pelicula->descripcion;
            }

            ?>
            <td style="max-width: 200px;">{{$aux}}...</td>
            <td><a href="{{asset($pelicula->ImagenCartel)}}" target="_blank"><img src="{{asset($pelicula->ImagenCartel)}}" alt="" class="ImagenTabla"></a></td>
            <td>
                <a class="btn btn-secondary" style="margin-top: 10px;" href="{{route('pelicula.show',['pelicula' => $pelicula->id])}}">Modificar</a>
                <button type="button" style="margin-top: 10px;" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$pelicula->id}}">Elimiar</button>
            </td>
        </tr>

        <div class="modal fade" id="modal-{{$pelicula->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Eliminar pelicula</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Esta seguro de eliminar la pelicula <strong>{{$pelicula->nombre}}</strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <form action="{{route('pelicula.destroy',['pelicula' => $pelicula->id])}}" method="POST">
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
    function obtener(t) {
        return t;
    }
</script>
@endsection