<?php

namespace App\Http\Services\OMDbAPI;

use Illuminate\Support\Facades\Http;

class ServiceOMDBApi
{

    private $apiKey, $endpoint;

    public function __construct()
    {
        $this->apiKey = '8dbee132';
        $this->endpoint = 'https://www.omdbapi.com/?apikey=' . $this->apiKey;
    }


    public function getMoviesBySearch($searchTitleMovie, $page = "1", $typeApp = "json", $typeResult = "movie", $year = "")
    {
        $response = Http::get($this->endpoint . "&s=" . $searchTitleMovie . "&page=" . $page .  "&r=" . $typeApp . "&type=" . $typeResult . "&y=" . $year)->json();
        return $response;
    }

    public function getMoviesById($searchIdMovie, $typeResult = "movie", $typeApp = "json",  $year = "")
    {
        $response = Http::get($this->endpoint . "&i=" . $searchIdMovie . "&r=" . $typeApp . "&type=" . $typeResult . "&y=" . $year)->json();
        return $response;
    }
}
