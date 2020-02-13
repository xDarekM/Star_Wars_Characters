<?php


namespace App\Http;


class JsonParser {
    public  function parse(string $json):array

    {
            return json_decode($json, true);
    }
}
