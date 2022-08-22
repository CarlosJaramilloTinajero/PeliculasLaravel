@extends('vistaBaseMenu')
@section('content')
<style>
    .contenedorA {
        width: 450px;
        height: max-content;
        margin-left: auto;
        margin-right: auto;
        /* border:1px white solid ; */
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
    <h2>Iniciar sesion</h2>
    @if (session('success'))
    <h5 class="alert alert-success">{{session('success')}}</h5>
    @endif

    @if (session('error'))
    <h5 class="alert alert-danger">{{session('error')}}</h5>
    @endif

    @error('name')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    @error('password')
    <h5 class="alert alert-danger">{{$message}}</h5>
    @enderror

    <form action="{{route('login')}}" method="POST">
        @csrf
        <label for="inputEmail3" class="labelC form-label">Usare name / Email</label>
        <input type="text" class="form-control" name="name"><br>

        <label for="inputPassword3" class="form-label labelC">Password</label>
        <input type="password" class="form-control" name="password"><br>

        <center>
            <p style="color: white;">No tienes cuenta? <br> <a style="color: white;" href="{{route('registro')}}">Registrate</a></p>
        </center>
        <div class="d-grid gap-2">
            <button type="submit" class="btn boton3">Iniciar sesion</button>
        </div>
    </form>
</div>
<script>
    function obtener(t) {
        return t;
    }
</script>
@endsection