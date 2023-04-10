<?php

namespace App\Http\Livewire\Frontend\Movie;

use App\Models\lista;
use App\Models\User;
use Livewire\Component;

class ListMovies extends Component
{
    public $movies, $user, $opacityBoxShadows = '.8';

    public function mount()
    {
        $this->user = User::with('movies.movie.category')->find(auth()->id());
    }

    public function render()
    {
        return view('livewire.frontend.movie.list-movies');
    }

    public function removeMovie($id)
    {
        if ($lista = lista::where('idUser', $this->user->id)->where('idPelicula', $id)->first()) {
            $lista->delete();
        }
        $this->mount();
    }
}
