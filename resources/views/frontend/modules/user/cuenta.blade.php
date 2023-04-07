@extends('frontend.layout.vistaBaseMenu')
@section('content')
    <title>Cuenta</title>
    <style>
        .contenedorA {
            max-width: 450px;
            height: max-content;
            margin-left: auto;
            margin-right: auto;
        }


        .labelC {
            color: white;
        }

        h1 {
            margin-bottom: 20px;
            color: whitesmoke;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }
    </style>
    <div class="contenedorA p-5" style="margin-top: 0px;">
        <h1>Cuenta</h1>


        @error('imgUser')
            <h5 class="alert alert-danger"> {{ $message }}</h5>
        @enderror

        @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
        @endif

        @if (session('error'))
            <h5 class="alert alert-success">{{ session('error') }}</h5>
        @endif

        <label for="" class="form-label labelC">Usuario</label>
        <input class="form-control" type="text" name="name" value="{{ auth()->user()->name }}" disabled>
        <br><label for="" class="form-label labelC">Email</label>
        <input class="form-control" type="email" name="email" value="{{ auth()->user()->email }}" disabled>
        <br><label for="" class="form-label labelC">Contraseña</label>
        <input class="form-control" type="password" name="email" value="{{ auth()->user()->password }}" disabled>
        <form action="{{ route('modificarUser', ['user' => auth()->user()->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            @if (auth()->user()->imgUser == null)
                <br><label for="" class="form-label labelC">Agregar imagen de usuario</label>
            @else
                <br><label for="" class="form-label labelC">Modificar imagen de usuario</label>
            @endif
            <input class="form-control" type="file" name="imgUser" accept="image/*">
            <br>
            <div class="d-grid gap-2">
                @if (auth()->user()->imgUser == null)
                    <input type="submit" value="Agregar" class="btn boton3">
                @else
                    <input type="submit" value="Modificar" class="btn boton3">
                @endif
            </div>
        </form>
    </div>
@endsection

@section('script')
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
