@extends('vistaBaseMenu')
@section('content')
<title>Agregar pelicula</title>
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
         <label for="Name" class="form-label">Descripcion de la pelicula
            <label data-bs-toggle="popover" data-bs-title="No agregar una descripcion muy extensa" dtat-bs-trigger="focus" data-bs-placement="right">
               <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
               </svg>
            </label>
         </label>
         <textarea class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>
      </div>

      <div class="mb-3">
         <label for="Name" class="form-label">Link de la pelicula
            <label class="popoverClass" data-bs-toggle="popover" data-bs-title="El link debe de ser de un video de Youtube. El link debe ser tipo URL" dtat-bs-trigger="focus" data-bs-placement="right">
               <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
               </svg>
            </label>
         </label>
         <input type="text" class="form-control" name="linkPelicula">
      </div>

      <div class="mb-3">
         <label for="Name" class="form-label">Link del trailer
            <label class="popoverClass" data-bs-toggle="popover" data-bs-title="El link debe de ser de un video de Youtube. El link debe ser tipo URL" dtat-bs-trigger="focus" data-bs-placement="right">
               <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
               </svg>
            </label>
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
         <label for="ImagenCartel" class="form-label">Imagen de la pelicula
            <label class="popoverClass" data-bs-toggle="popover" data-bs-title="Agregar archivo tipo png, jpg, jpeg" dtat-bs-trigger="focus" data-bs-placement="right">
               <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
               </svg>
            </label>
         </label>
         <input type="file" class="form-control" id="exampleInputEmail1" name="ImagenCartel" accept="image/x-png,image/jpg,image/jpeg">
      </div>

      <button type="submit" class="btn btn-primary">Agregar</button>
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