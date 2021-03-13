<?php

namespace TeoryAndPractic\Lesson_11\Cities;

/**
 * Class City
 * @package TeoryAndPractic\Lesson_11\Cities
 */
class City
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
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
}