<?php


namespace App\Http;
use App\Http\Person;

use http\Url;


class ApiDownloader
{
    public $curlHandle;
    /**
     * @param string $url
     */
    public function setConnect(string $url)
    {

        $this->curlHandle = curl_init();
        curl_setopt($this->curlHandle, CURLOPT_URL, $url);
        curl_setopt($this->curlHandle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curlHandle, CURLOPT_RETURNTRANSFER, 1);
    }

    /**
     * @param string $connect
     * @return array|null
     */
    public function download(string $connect):?Person
    {
        try {
            $this->setConnect($connect);
            $receivedData = json_decode(curl_exec($this->curlHandle),true);
            curl_close($this->curlHandle);

            /** @var TYPE_NAME $receivedData */
            $receivedData = new Person;
            $receivedData->setData(array($receivedData));
           return $receivedData;


        }
        catch(\Exception $error){
            die($error->getMessage());

        }


    }






}

