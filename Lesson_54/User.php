<?php

namespace TeoryAndPractic\Lesson_54;

use TeoryAndPractic\Lesson_45\Interface_exists\iTest1;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_54
 */
class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $age;


    /**
     * User constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->$property;
    }
}
$user = new User('Bogdan', 29);
