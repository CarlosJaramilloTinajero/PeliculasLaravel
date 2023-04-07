<?php

namespace App\Http\Livewire\Movies;

use App\Http\Services\OMDbAPI\ServiceOMDBApi;
use App\Models\categoria;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddMovieOmba extends Component
{

    use WithFileUploads;

    public $search = "", $movies = [], $movie = [], $movieTitle = "", $page = 1, $results = null, $pictureApi = false, $imageForm = null;

    public $addMovieForm = false, $submited = null;

    public $categories;

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
    }
    public function submit()
    {
        $this->submited = "Pelicula " . $this->movie['Title'] . ' agregada correctamente';
        $this->resetMovieData();
    }
}
