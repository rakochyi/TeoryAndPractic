<?php

namespace TeoryAndPractic\Lesson_53;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_53
 */
class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var mixed
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


    public function __toString()
    {
        return $this->name . ' - ' . $this->age;
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
    public function getAge()
    {
        return $this->age;
    }
}
$user = new User('Bogdan', 29);
echo $user;