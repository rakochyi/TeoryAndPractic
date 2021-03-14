<?php

namespace TeoryAndPractic\Lesson_19;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_19
 */
class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $age;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param mixed $name
     */
    public function setName($name)
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
    public function setAge($age)
    {
        $this->age = $age;
    }
}