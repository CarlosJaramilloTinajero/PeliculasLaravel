<?php

namespace App\Http\Livewire\Movies;

use App\Http\Services\OMDbAPI\ServiceOMDBApi;
use App\Models\categoria;
use App\Models\pelicula;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddMovieOmba extends Component
{

    use WithFileUploads;

    public $search = "", $movies = [], $movie = [], $movieTitle = "", $page = 1, $results = null, $pictureApi = false, $imageForm = null;

    public $addMovieForm = false, $submited = null, $msgSearch = false, $movieCategory = "";

    public $categories, $msgErrorForm = null;

    public function mount()
    {
        $this->categories = categoria::where('Tipo', 'pelicula')->get();
    }

    public function render()
    {
        return view('livewire.movies.add-movie-omba');
    }

    public function changeForm($bool)
    {
        $this->addMovieForm = $bool;
        $this->mount();
    }

    public function resetMovieData()
    {
        $this->movie = [];
        $this->movieTitle = "";
        $this->pictureApi = false;
        $this->imageForm = null;
        $this->movieCategory = "";
        $this->msgErrorForm = null;
        $this->changeForm(false);
    }

    public function changePictureApi()
    {
        $this->pictureApi = !$this->pictureApi;
    }

    public function setMovieData($movie)
    {
        $serviceOmba = new ServiceOMDBApi();
        $movieData = $serviceOmba->getMoviesById($movie['imdbID'], $movie['Type']);

        // dd($movieData);
        if ($movieData['Response'] == "True") {
            $this->movie = $movieData;
            $this->movieTitle = $movieData['Title'];
            $this->changeForm(true);
        } else {
            $this->results = $movieData['error'];
        }
    }

    public function changePage($type)
    {
        if ($type == 'mas') {
            $this->page++;
            $this->search();
            return;
        }

        if ($this->page > 1) {
            $this->page--;
            $this->search();
        }
    }

    public function search($form = false)
    {
        if ($form) {
            $this->page = 1;
            $this->resetAlerts();
        } else {

            if ($this->page == 0) {
                $this->page = 1;
            }

            if (is_numeric($this->results) && $this->page > ceil($this->results / 10)) {
                $this->page = ceil($this->results / 10);
            }
        }

        $this->movies = [];

        $serviceOmba = new ServiceOMDBApi();
        $searchData = $serviceOmba->getMoviesBySearch($this->search, $this->page);

        if ($searchData['Response'] != 'False') {
            $this->movies = $searchData['Search'];
            $this->results = $searchData['totalResults'];
        } else {
            $this->results = $searchData['Error'];
        }

        if ($form) {
            $this->msgSearch = true;
        }
    }

    public function resetAlerts()
    {
        $this->submited = null;
        $this->msgSearch = false;
        $this->msgErrorForm = null;
    }

    public function changeAlert($alert)
    {
        switch ($alert) {
            case 'successForm':
                $this->submited = null;
                break;

            case 'successSearch':
                $this->msgSearch = false;
                break;

            case 'msgErrorForm':
                $this->msgErrorForm = null;
                break;
        }
    }

    public function submit()
    {
        try {
            if ($error = $this->validateForm()) {
                $this->msgErrorForm = $error;
                return;
            }

            $movie = new pelicula();

            if (!$this->pictureApi) {
                $path = $this->movie['Poster'];
                $path = str_replace('X300', 'X1000', $path);
                // $file = file_get_contents($path);
                // $fileName = explode('.', $path);
                // $fileName = $fileName[count($fileName) - 1];
                // $fileName = time() . '.' .  $fileName;
                $movie->ImagenCartel = $path;
            } else {
                $file = $this->imageForm;
                $fileName = $file->getClientOriginalName();

                $destino = 'Imagenes/imagenes_de_Cartel_Grande_Peliculas/' . $fileName;

                if (!Storage::disk('public')->put($destino, $file)) {
                    $this->msgErrorForm = 'Error al subir la imagen';
                    return;
                }
                $movie->ImagenCartel = 'storage/' . $destino;
            }

            // $destino = 'Imagenes/imagenes_de_Cartel_Grande_Peliculas/' . $fileName;

            // if (!Storage::disk('public')->put($destino, $file)) {
            //     $this->msgErrorForm = 'Error al subir la imagen';
            //     return;
            // }

            $movie->nombre = $this->movie['Title'];
            $movie->descripcion = $this->movie['Plot'];
            $movie->linkPelicula = "";
            $movie->linkTrailer = "";
            // $movie->ImagenCartel = 'storage/' . $destino;
            $movie->categoria_id = $this->movieCategory;
            $movie->year_released = $this->movie['Released'];
            $movie->save();

            $this->submited = "Pelicula " . $this->movie['Title'] . ' agregada correctamente';
            $this->resetMovieData();
        } catch (\Exception $e) {
            report($e);
        }
    }

    public function validateForm()
    {
        if ($this->movieCategory == "") {
            return "La categoria es necesaria, porfavor seleccione una";
        }
        if ($this->pictureApi && !$this->imageForm) {
            return "La imagen es necesaria, si no quiere subir una imagen seleccione la imagen de la API";
        }
        return null;
    }
}
