<?php

namespace TeoryAndPractic\Lesson_11;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_11
 */
class User
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $age;

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
}
