@extends('vistaBaseMenu')
@section('content')

<div class="container w-50 p-5" style="margin-top: 100px;">

   <h2>Agregar una nueva pelicula</h2>
   @if (session('success'))
   <h5 class="alert alert-success">{{session('success')}}</h5>
   @endif

   @error('nombre')
   <h5 class="alert alert-danger">{{$message}}</h5>
   @enderror

   @error('descripcion')
   <h5 class="alert alert-danger">{{$message}}</h5>
   @enderror

   @error('ImagenCartel')
   <h5 class="alert alert-danger">{{$message}}</h5>
   @enderror


   <br>
   <form method="POST" action="{{route('pelicula.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
         <label for="Name" class="form-label">Nombre de la pelicula</label>
         <input type="text" class="form-control" name="nombre">
      </div>

      <div class="mb-3">
         <label for="Name" class="form-label">Descripcion de la pelicula <label class="popoverClass" data-bs-toggle="popover" data-bs-title="No agregar una descripcion no muy extensa" dtat-bs-trigger="focus"  data-bs-placement="right">¿?</label>
         </label>
         <textarea class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>
         <!-- <input type="text" class="form-control" name=""> -->
      </div>

      <div class="mb-3">
         <label for="Name" class="form-label">Link de la pelicula <label class="popoverClass" data-bs-toggle="popover"  data-bs-title="El link debe de ser de un video de Youtube. El link debe ser tipo URL" dtat-bs-trigger="focus"  data-bs-placement="right">¿?</label>
         </label>

         <input type="text" class="form-control" name="linkPelicula">
      </div>

      <div class="mb-3">
         <label for="Name" class="form-label">Link del trailer <label class="popoverClass" data-bs-toggle="popover" data-bs-title="El link debe de ser de un video de Youtube. El link debe ser tipo URL" dtat-bs-trigger="focus"  data-bs-placement="right">¿?</label>
         </label>

         <input type="text" class="form-control" name="linkTrailer">
      </div>

      <div class="mb-3">
         <label for="Name" class="form-label">Categoria de la pelicula
         </label>
         <select class="form-select" name="categoria_id">
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
         </select>
      </div>

      <div class="mb-3">
         <label for="ImagenCartel" class="form-label">Imagen de la pelicula <label class="popoverClass" data-bs-toggle="popover" data-bs-title="Agregar archivo tipo png, jpg, jpeg" dtat-bs-trigger="focus"  data-bs-placement="right">¿?</label>
         </label>
         <input type="file" class="form-control" id="exampleInputEmail1" name="ImagenCartel" accept="image/x-png,image/jpg,image/jpeg">
      </div>

      <button type="submit" class="btn btn-primary">Agregar</button>
   </form>
</div>
<br>

<!-- <script>
   $(document).ready(function() {
      $('[data-toggle="popover"]').popover();
   });
</script> -->

<script>
   function obtener(t) {
      return t;
   }
</script>


@endsection