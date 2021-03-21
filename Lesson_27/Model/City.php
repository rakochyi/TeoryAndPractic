<?php

namespace TeoryAndPractic\Lesson_27\Model;

/**
 * Class City
 * @package TeoryAndPractic\Lesson_27\Model
 */
class City
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $population;


    /**
     * City constructor.
     * @param $name
     * @param $population
     */
    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }


    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }
}

$city1 = new City('Ternopil', 200000);
$city2 = new City('Lviv', 2000000);
$city3 = new City('Kyiv', 4000000);

$arr = [];
array_unshift($arr, $city, $city2, $city3);
