<?php

namespace TeoryAndPractic\Lesson_21;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_21
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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        if($age >= 18) {
            $this->age = $age;
        }
    }
}

