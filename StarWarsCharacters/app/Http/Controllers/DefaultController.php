<?php

namespace App\Http\Controllers;

use App\Http\ApiDownloader;
use Illuminate\Http\Request;


class DefaultController extends Controller
{

    public function index(ApiDownloader $apiDownloader,  Request $request )
    {
        $countrySet = $request->input('countrySet');
        $countrySet = ucwords($countrySet);
        $star_wars = $apiDownloader->downloadAndParse("https://pomber.github.io/covid19/timeseries.json", $countrySet );
        return view('/sites/ApiList', [
            'star_wars' => $star_wars ?? []
        ]);
        }



    }




