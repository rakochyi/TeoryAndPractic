<?php

namespace TeoryAndPractic\Lesson_46;

require_once "Helper.php";

/**
 * Class Country
 * @package TeoryAndPractic\Lesson_46
 */
class Country
{
    /**
     * Trait Helper
     */
    use Helper;

    /**
     * @var mixed
     */
    private $population;


    /**
     * Country constructor.
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
$country = new Country('Ukraine', 1100, 42000000);
echo $country->getName() . ' - ';
echo $country->getAge() . ' - ';
echo $country->getPopulation();