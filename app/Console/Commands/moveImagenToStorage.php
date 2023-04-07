<?php

namespace App\Console\Commands;

use App\Models\pelicula;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class moveImagenToStorage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'move:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $movies = pelicula::get();

        foreach ($movies as $value) {

            $file = file_get_contents('https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Metallica_through_the_never_poster.jpg/405px-Metallica_through_the_never_poster.jpg?20140110113658');


            $path = 'images';
            
            dd(Storage::disk('public')->putFile($path, $file));
        }
    }
}
