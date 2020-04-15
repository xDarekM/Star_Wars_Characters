<?php


namespace App\Http;
use App\Http\PersonStats;

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
     * @param string $countrySet
     * @return array|null
     */
    public function downloadAndParse(string $connect, ?string $countrySet):?array
    {
        try {
            $this->setConnect($connect);
            $receivedData = json_decode(curl_exec($this->curlHandle),true);
            curl_close($this->curlHandle);
            $country = $_GET['$countrySet'];
            if (array_key_exists($country,$receivedData)) {
                if (empty($receivedData)) {
                    return null;
                }
                $personArray = [];
                foreach ($receivedData as $singleData) {
                    $person = new PersonStats;
                    $person->setData($singleData);

                    $personArray[] = [
                        'date' => $person->date,
                        'confirmed' => $person->confirmed,
                        'deaths' => $person->deaths,
                        'recovered' => $person->recovered,


                    ];
                }
                return $personArray;
           }



        }
        catch(\Exception $error){
            die($error->getMessage());

        }


    }






}

