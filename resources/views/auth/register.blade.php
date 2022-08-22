@extends('vistaBaseMenu')
@section('content')

<style>
    .contenedorA {
        width: 450px;
        height: max-content;
        margin-left: auto;
        margin-right: auto;
    }


    .labelC {
        color: white;
    }

    h2 {
        margin-bottom: 20px;
        color: whitesmoke;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }
</style>

<div class="contenedorA w-55 p-5" style="margin-top: 105px;">
    <h2>Registrate</h2>
    @if (session('success'))
    <h6 class="">{{session('success')}}</h6>
    @endif

    @error('name')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    @error('email')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    @error('password')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror


    @error('password_confirmation')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    <form action="{{route('registro')}}" method="POST">
        @csrf

        <label for="inputEmail3" class="labelC form-label">Nombre de usuario</label>
        <input type="text" class="form-control" name="name"><br>

        <label for="inputEmail3" class="form-label labelC">Email</label>
        <input type="email" class="form-control" name="email"><br>

        <label for="inputPassword3" class="labelC form-label">Contraseña</label>
        <input type="password" class="form-control" name="password"><br>

        <label for="inputPassword3" class="labelC form-label">Confirmar contraseña</label>
        <input type="password" class="form-control" name="password_confirmation"><br>

        <center>
            <p style="color: white;">Ya tines cuenta? <br> <a style="color: white;" href="{{route('login')}}">Inicia sesion</a></p>
        </center>
        <div class="d-grid gap-2">

            <button type="submit" class="btn boton3">Registrate</button>
        </div>
    </form>
</div>

<script>
    function obtener(t) {
        return t;
    }
</script>
@endsection