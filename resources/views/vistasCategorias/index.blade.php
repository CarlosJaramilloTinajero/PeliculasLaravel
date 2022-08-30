@extends('vistaBaseMenu')

@section('content')
<title>Categorias</title>
<div class="container w-55 p-5" style="margin-top: 100px;">
    <h2 class="">Categorias agregadas</h2>
    <a href="{{route('categoria.create')}}" style="margin-top: 10px;" class="btn btn-primary">Agregar categoria</a><br>

    <br>
    @if (session('success'))
    <h5 class="alert alert-success">{{session('success')}}</h5>
    @endif

    <table class="table table-striped Tabla">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Color</th>
            <th>Acciones</th>
        </tr>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td><span class="color-container" style="background-color:{{$categoria->Color}}"></span> </td>
            <td>
                <a class="btn btn-secondary" href="{{route('categoria.show',['categorium' => $categoria->id])}}">Modificar</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$categoria->id}}">Elimiar</button>
            </td>
        </tr>



        <div class="modal fade" id="modal-{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Eliminar categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Al eliminar la categia <strong>{{$categoria->nombre}}</strong> se eliminan todas las peliculas asignadas a la misma.
                        ¿Esta seguro de eliminar la categoria <strong>{{$categoria->nombre}}</strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <form action="{{route('categoria.destroy',['categorium' => $categoria->id])}}" method="POST">
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
    function obtener(t) {
        return t;
    }
</script>F
@endsection