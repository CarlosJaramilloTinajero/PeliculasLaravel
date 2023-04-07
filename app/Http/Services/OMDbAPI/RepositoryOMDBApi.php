<?php

namespace App\Http\Services\OMDbAPI;

class RepositoryOMDBApi
{

    public $service;
    function __construct()
    {
        $this->service = new ServiceOMDBApi();
    }

    public function getMoviesBySearch($searchTitleMovie, $typeApp = "json", $typeResult = "movie", $year = "")
    {
        $response = $this->service->getMoviesBySearch($searchTitleMovie, 1, $typeApp, $typeResult, $year);
        $aux = [];
        $page = 1;
        while ($response['Response'] == 'True') {
            $response = $this->service->getMoviesBySearch($searchTitleMovie, $page, $typeApp, $typeResult, $year);
            if (isset($response['Search'])) {
                foreach ($response['Search'] as $key => $value) {
                    $aux[] = $value;
                }
            }
            $page++;
        }
        return $aux;
    }
}
