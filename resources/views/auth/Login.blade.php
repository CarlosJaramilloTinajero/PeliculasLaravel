@extends('frontend.layout.vistaBaseMenu')
@section('content')

<title>Login</title>
<style>
    .contenedorA {
        max-width: 450px;
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
    <h2>Iniciar sesion <label data-bs-toggle="popover" data-bs-title="Admin = admin / ********" dtat-bs-trigger="focus" data-bs-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg>
        </label></h2>
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

    <form action="{{route('login.user')}}" method="POST">
        @csrf
        <label for="inputEmail3" class="labelC form-label">Nombre de usuario / Email</label>
        <input type="text" class="form-control" name="name"><br>

        <label for="inputPassword3" class="form-label labelC">Contraseña</label>
        <input type="password" class="form-control" name="password"><br>

        <center>
            <p style="color: white;">No tienes cuenta? <br> <a style="color: white; text-decoration: underline;" href="{{route('registro.show')}}">Registrate</a></p>
        </center>
        <div class="d-grid gap-2">
            <button type="submit" class="btn boton3">Iniciar sesion</button>
        </div>
    </form>
</div>
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