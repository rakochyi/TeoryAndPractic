<?php

namespace TeoryAndPractic\Lesson_46;

require_once "Helper.php";

/**
 * Class City
 * @package TeoryAndPractic\Lesson_46
 */
class City
{
    /**
     * trait Helper
     */
    use Helper;

    /**
     * @var mixed
     */
    private $population;


    /**
     * City constructor.
     * @param $name
     * @param $age
     * @param $population
     */
    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
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
$city = new City('Ternopil', 600, 200000);
echo $city->getName() . ' - ';
echo $city->getAge() . ' - ';
echo $city->getPopulation();