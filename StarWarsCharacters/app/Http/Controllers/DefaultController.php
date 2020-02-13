<?php

namespace App\Http\Controllers;

use App\Http\ApiDownloader;
use App\Http\JsonParser;

class DefaultController extends Controller
{

    public function index(ApiDownloader $apiDownloader ,JsonParser $jsonParser)
    {

            $star_wars = $apiDownloader->download("https://swapi.co/api/people/?format=json");
            return view('/sites/ApiList',['star_wars' => $jsonParser->parse($star_wars)['results']]);
        }



    }




