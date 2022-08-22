@extends('vistaBaseMenu')
@section('content')
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
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        @foreach ($peliculas as $pelicula)
        <?php if ($pelicula->categoria_id == $categoria->id) { ?>
            <tr>

                <td>{{$pelicula->nombre}}</td>
                <td>{{$pelicula->descripcion}}</td>
                <td><a href="{{asset($pelicula->ImagenCartel)}}" target="_blank"><img src="{{asset($pelicula->ImagenCartel)}}" alt="" class="ImagenTabla"></a></td>
                <td>
                    <form action="{{route('pelicula.destroy',['pelicula' => $pelicula->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-secondary" style="margin-top: 10px;" href="{{route('pelicula.show',['pelicula' => $pelicula->id])}}">Modificar</a>
                        <input type="submit" style="margin-top: 10px;" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>

            </tr>
        <?php  } ?>
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