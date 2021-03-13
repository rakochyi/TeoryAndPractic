<?php

namespace TeoryAndPractic\Lesson_14;

/**
 * Class City
 * @package TeoryAndPractic\Lesson_14
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
    public $foundation;

    /**
     * @var integer
     */
    public $population;


    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getFoundation()
    {
        return $this->foundation;
    }


    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }
}

$city = new City('Ternopil', '28.08.1540', 200000);

$props = [
    'prop1' => 'name',
    'prop2' => 'foundation',
    'prop3' => 'population'
];

echo $city->{$props['prop1']};