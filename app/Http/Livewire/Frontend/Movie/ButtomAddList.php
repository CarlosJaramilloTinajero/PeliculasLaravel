<?php

namespace App\Http\Livewire\Frontend\Movie;

use App\Models\lista;
use App\Models\pelicula;
use App\Models\User;
use Livewire\Component;

class ButtomAddList extends Component
{
    public $movie, $agregada = false, $user;

    // protected $listeners = ['addMovie' => 'addMovie'];

    public function mount()
    {
        $this->movie = pelicula::find($this->movie->id);
        $this->user = User::with('movies')->find(auth()->id());
    }

    public function render()
    {
        $this->agregada = $this->isLists();
        return view('livewire.frontend.movie.buttom-add-list');
    }

    public function addMovie()
    {
        if (!$this->agregada) {
            lista::create([
                'idUser' => $this->user->id,
                'idPelicula' => $this->movie->id
            ]);
            $this->mount();
        }
    }

    public function removeMovie()
    {
        if ($this->agregada) {
            if ($lista = lista::where('idUser', $this->user->id)->where('idPelicula', $this->movie->id)->first()) {
                $lista->delete();
            }
            $this->mount();
        }
    }

    public function isLists(): bool
    {
        if (count($this->user->movies) > 0) {
            return $this->user->movies->contains('idPelicula', $this->movie->id);
        }
        return false;
    }
}
