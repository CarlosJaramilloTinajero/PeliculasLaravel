@extends('vistaBaseMenu')

@section('content')
<div class="container w-55 p-5" style="margin-top: 100px;">
    <h2 class="">Peliculas agregadas</h2>
    <br>
    @if (session('success'))
    <h5 class="alert alert-success">{{session('success')}}</h5>
    @endif
    @if (session('error'))
    <h5 class="alert alert-danger">{{session('error')}}</h5>
    @endif



    <table class="table table-striped Tabla">
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        <?php $i = 0; ?>
        @foreach ($peliculas as $pelicula)
        <tr>
            <?php $i++; ?>
            <td>{{$i}}</td>
            @foreach ($categorias as $categoria)
            <?php
            if ($categoria->id == $pelicula->categoria_id) {
                echo '<td style="background-color:' . $categoria->Color . '"><a href="' . route('categoria.show', ['categorium' => $categoria->id]) . '"><strong>' . $categoria->nombre . '</strong></a></td>';
            }
            ?>
            @endforeach
            <td>{{$pelicula->nombre}}</td>
            <?php
            $x = str_split($pelicula->descripcion);
            $aux = "";
            $maxPalabras = 10;
            if ($x > $maxPalabras) {
                for ($i = 0; $i < $maxPalabras; $i++) {
                    $aux .= $x[$i];
                }
                // echo $aux;
            } else {
                $aux = $pelicula->descripcion;
            }

            ?>
            <td style="max-width: 200px;">{{$aux}}...</td>
            <td><a href="{{asset($pelicula->ImagenCartel)}}" target="_blank"><img src="{{asset($pelicula->ImagenCartel)}}" alt="" class="ImagenTabla"></a></td>
            <td>
                <a class="btn btn-secondary" style="margin-top: 10px;" href="{{route('pelicula.show',['pelicula' => $pelicula->id])}}">Modificar</a>
                <button type="button" style="margin-top: 10px;" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$pelicula->id}}">Elimiar</button>
            </td>
        </tr>



        <div class="modal fade" id="modal-{{$pelicula->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Eliminar pelicula</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Esta seguro de eliminar la pelicula <strong>{{$pelicula->nombre}}</strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <form action="{{route('pelicula.destroy',['pelicula' => $pelicula->id])}}" method="POST">
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
</script>
@endsection