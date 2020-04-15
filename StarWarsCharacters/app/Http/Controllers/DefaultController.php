<?php

namespace App\Http\Controllers;

use App\Http\ApiDownloader;


class DefaultController extends Controller
{

    public function index(ApiDownloader $apiDownloader )
    {

        $star_wars = $apiDownloader->downloadAndParse("https://pomber.github.io/covid19/timeseries.json");
        dd($star_wars);
        return view('/sites/ApiList', [
            'star_wars' => $star_wars ?? []
        ]);
        }



    }




