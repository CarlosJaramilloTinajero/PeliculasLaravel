<div>
    <style>
        .imageOMBA {
            width: 80px;
            height: 100px;
            margin: 0 auto;
        }

        .imageOMBA img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .paginationMovies {
            width: 250px;
            height: auto;
            margin: 10px auto;
            display: flex;
        }

        .paginationMovies .changePage {
            width: 35%;
        }

        .paginationMovies .changePage:first-child {
            margin-right: 10px;
        }

        .paginationMovies .changePage:last-child {
            margin-left: 10px;
        }

        .paginationMovies .pageMovies {
            width: 30%;
        }

        .paginationMovies .pageMovies input {
            width: 100%;
            height: 36px;
            margin-top: 4px;
            /* padding: 0 3px; */
            border-radius: 2px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: unset;
        }

        .pageText {
            text-align: center;
            width: 250px;
            margin: 10px auto;
        }

        .pageText p {
            margin-bottom: 0px;
            font-size: 15px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: rgba(0, 0, 0, 0.8);
        }
    </style>
    @if (!$addMovieForm)
        <form wire:submit.prevent="search({{ true }})">
            <div class="mb-3">
                <input type="text" wire:model.prevent="search" placeholder="Buscar por nombre" class="form-control">
            </div>
        </form>

        @if ($submited)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Exito </strong> {{ ' !' . $submited }}!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (is_numeric($results))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ '#' . $results . ' resultados encontrados' }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
            @if ($results)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $results }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endif

        @if (count($movies) > 0)

            <div class="pageText">
                <p>Pagina {{ $page }} de {{ ceil($results / 10) }} de {{ $results }} resultados</p>
            </div>
            <div class="paginationMovies">
                <div class="changePage">
                    <button wire:click="changePage('menos')" class="btn boton2"><strong>Anterior</strong></button>
                </div>
                <div class="pageMovies">
                    <form wire:submit.prevent="search">
                        <input required type="number" wire:model.prevent="page">
                    </form>
                </div>
                <div class="changePage">
                    <button wire:click="changePage('mas')" class="btn boton2"><strong>Siguiente</strong></button>
                </div>
            </div>

            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Año</th>
                        <th>Categoria</th>
                        <th class="text-center">Imagen</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($movies as $item)
                        <tr>
                            <td>{{ $item['Title'] }}</td>
                            <td>{{ $item['Year'] }}</td>
                            <td>{{ $item['Type'] }}</td>
                            <td>
                                <div class="imageOMBA">
                                    <img src="{{ isset($item['Poster']) ? $item['Poster'] : '' }}" alt="">
                                </div>
                            </td>
                            <td class="p-4">
                                <div class="d-flex justify-content-center">
                                    <button wire:click="setMovieData({{ json_encode($item) }})"
                                        class="btn btn-secondary btn-sm">Agregar</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @else
        <div class="d-flex justify-content-start mb-4 mt-3">
            <button wire:click="resetMovieData()" class="btn btn-secondary btn-sm">Regresar</button>
        </div>
        <form wire:submit.prevent="submit">
            <div class="mb-3">
                <p class="text-start h6">Agregar pelicula '{{ $movieTitle }}'</p>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model="movie.Title" id="floatingInput"
                    placeholder="Nombre de la pelicula">
                <label for="floatingInput">Nombre de la pelicula</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model="movie.Released" id="floatingInput"
                    placeholder="">
                <label for="floatingInput">Año de lanzamiento</label>
            </div>

            <div class="form-floating mb-3">
                <input disabled type="text" class="form-control" wire:model="movie.Genre" id="floatingInput"
                    placeholder="">
                <label for="floatingInput">Genero</label>
            </div>

            <div class="form-floating mb-3">
                <select name="" id="" class="form-select">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
                <label for="floatingInput">Seleccione una categoria</label>
            </div>

            <div class="form-floating mb-3">
                <input disabled type="text" class="form-control" wire:model="movie.Writer" id="floatingInput"
                    placeholder="">
                <label for="floatingInput">Escritores</label>
            </div>

            <div class="form-floating mb-3">
                <input disabled type="text" class="form-control" wire:model="movie.Actors" id="floatingInput"
                    placeholder="">
                <label for="floatingInput">Actores</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model="movie.Plot" id="floatingInput" placeholder="">
                <label for="floatingInput">Sintesis</label>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Imagen API {{ $pictureApi }}</label>
                <div class="imageOMBA" style="margin: 0 0 0 0;">
                    <img class="{{ $pictureApi ? 'img-thumbnail opacity-50' : 'img-thumbnail' }}"
                        src="{{ isset($movie['Poster']) ? $movie['Poster'] : '' }}" alt="">
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="checkbox" wire:click="changePictureApi"
                        aria-label="Checkbox for following text input">
                </div>
                <input type="text" class="form-control" disabled value="Poner imagen"
                    aria-label="Text input with checkbox">
            </div>

            <div class="{{ $pictureApi ? 'form-floating mb-3 d-block' : 'form-floating mb-3 d-none' }}">
                <input type="file" accept="image/png, image/jpeg, image/gif, image/jpg, image/webp"
                    class="form-control" wire:model="imageForm" id="floatingInput">
                <label for="floatingInput">Imagen</label>
            </div>


            <div class="mt-4 mb-2 d-flex justify-content-end">
                <button type="submit" class="btn boton2 px-4">Agregar</button>
            </div>
        </form>
    @endif
</div>
