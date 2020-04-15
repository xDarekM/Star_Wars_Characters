<?php


namespace App\Http;



class PersonStats
{

    /**
     * @var string
     */

    public $date;

    /**
     * @var int
     */
    public $confirmed;

    /**
     * @var int
     */

    public $deaths;

    /**
     * @var int
     */

    public $recovered;
    /**
     * @var int
     */

    public function setData(array $apiElement)
    {
        $this->date = $apiElement['date'] ??null;
        $this->confirmed = $apiElement['confirmed'] ??null;
        $this->deaths = $apiElement['deaths'] ??null;
        $this->recovered = $apiElement['recovered'] ??null;

    }



}
