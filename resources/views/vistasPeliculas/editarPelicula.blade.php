@extends('vistaBaseMenu')
@section('content')

<div class="container w-50 p-5 " style="margin-top: 100px;">


    <h2>Editar la pelicula</h2>
    @if (session('success'))
    <h5 class="alert alert-success">{{session('success')}}</h5>
    @endif
    @if (session('error'))
    <h5 class="alert alert-danger">{{session('error')}}</h5>
    @endif

    @error('nombre')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    @error('descripcion')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    @error('ImagenCartel')
    <h5 class="alert alert-danger">La imagen es necesaria, o puede escoger la opcion 'Usar imagen de la pelicula actual'. <br> {{$message}}</h5>
    @enderror

    <br>
    <form method="POST" action="{{route('pelicula.update',['pelicula' => $pelicula->id])}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="Name" class="form-label">Nombre de la pelicula</label>
            <input type="text" class="form-control" name="nombre" value="{{$pelicula->nombre}}">
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Descripcion de la pelicula <label class="popoverClass" data-bs-toggle="popover" data-bs-title="No agregar una descripcion no muy extensa" dtat-bs-trigger="focus" data-bs-placement="right">¿?</label>
            </label>
            <textarea class="form-control" name="descripcion" id="" cols="30" rows="10">{{$pelicula->descripcion}}</textarea>

            <!-- <input type="text" class="form-control" name="descripcion" > -->
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Link de la pelicula <label class="popoverClass" data-bs-toggle="popover" data-bs-title="El link debe de ser de un video de Youtube. El link debe ser tipo URL" dtat-bs-trigger="focus" data-bs-placement="right">¿?</label>
            </label>
            <input type="text" class="form-control" name="linkPelicula" value="{{$pelicula->linkPelicula}}">
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Link del trailer <label class="popoverClass" data-bs-toggle="popover" data-bs-title="El link debe de ser de un video de Youtube. El link debe ser tipo URL" dtat-bs-trigger="focus" data-bs-placement="right">¿?</label>
            </label>
            <input type="text" class="form-control" name="linkTrailer" value="{{$pelicula->linkTrailer}}">
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Categoria de la pelicula</label>
            <select class="form-select" name="categoria_id">
                @foreach ($categorias as $categoria)
                @if ($categoria->id == $pelicula->categoria_id)
                <option selected value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @else
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <input type="checkbox" value="si" name="chbImagen">
            <label for="ImagenCartel" class="form-label">Usar imagen de la pelicula actual</label>
            <br>
            <small>Imagen actual:</small><br><a target="_black" href="{{asset($pelicula->ImagenCartel)}}"><img src="{{asset($pelicula->ImagenCartel)}}" alt="Imagen actual" style="width: 50px; height: 70px;"></a><br></br>
            <label for="ImagenCartel" class="form-label">Modificar Imagen de la pelicula <label class="popoverClass" data-bs-toggle="popover" data-bs-title="Agregar archivo tipo png, jpg, jpeg" dtat-bs-trigger="focus" data-bs-placement="right">¿?</label>
            </label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="ImagenCartel" accept="image/x-png,image/jpg,image/jpeg">
        </div>

        <button style="margin-top: 16px;" type="submit" class="btn btn-primary">Modificar</button>
    </form>
</div>
<br>
<script>
    function obtener(t) {
        return t;
    }
</script>
@endsection