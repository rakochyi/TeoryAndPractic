<?php

namespace TeoryAndPractic\Lesson_22;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_22
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}