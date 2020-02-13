<?php


namespace App\Http;


class ApiDownloader
{
    public $init;


    public function  __construct()
    {

       $this ->init = curl_init();
    }

    public function setConnect(string $url)
    {
        curl_setopt($this->init,CURLOPT_URL, $url);
        curl_setopt($this->init,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($this->init,CURLOPT_RETURNTRANSFER,1);

    }
    public function download($connect)
    {
        $this->setConnect($connect);
        return  curl_exec($this->init);
    }
    public function __destruct()
    {
        curl_close($this->init);
    }


}

