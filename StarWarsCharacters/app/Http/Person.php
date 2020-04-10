<?php


namespace App\Http;



class Person
{

    /**
     * @var string
     */

    public $name;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */

    public $mass;

    /**
     * @var string
     */

    public $gender;
    /**
     * @var string
     */
    public $birthYear;

    /**
     * @var string
     */
    public $eyesColor;

    public function setData(array $apiElement)
    {
        $this->name = $apiElement['name'] ??null;
        $this->mass = $apiElement['mass'] ??null;
        $this->gender = $apiElement['gender'] ??null;
        $this->height = $apiElement['height'] ??null;
        $this->birthYear = $apiElement['birthYear'] ??null;
        $this->eyesColor = $apiElement['eyesColor'] ??null;
    }



}
