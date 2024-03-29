@extends('frontend.layout.vistaBaseMenu')
@section('content')
<title>Agregar categoria</title>

<div class="container p-5" style="margin-top: 100px;">


    <h2>Agregar una nueva categoria</h2>
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
    <form method="POST" action="{{route('categoria.store')}}">
        @csrf
        <div class="mb-3">
            <label for="Name" class="form-label">Nombre de la categoria</label>
            <input type="text" class="form-control" name="nombre">
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Descripcion de la categoria</label>
            <input type="text" class="form-control" name="descripcion">
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Tipo de categoria
            </label>
            <select class="form-select" name="Tipo">
                <option value="serie">Serie</option>
                <option value="pelicula">Pelicula</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Color de la categoria</label>
            <input type="color" class="form-control" name="color">
        </div>


        <button type="submit" class="btn botonesCategorias">Agregar</button>
    </form>
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