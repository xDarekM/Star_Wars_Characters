<?php

namespace App\Http\Controllers;

use App\Http\ApiDownloader;


class DefaultController extends Controller
{

    public function index(ApiDownloader $apiDownloader )
    {

            $star_wars = $apiDownloader->download("https://swapi.co/api/people/?format=json");
            return view('/sites/ApiList', $star_wars);
        }



    }




