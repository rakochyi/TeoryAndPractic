<?php

namespace TeoryAndPractic\Lesson_9;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_9
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

$user = new User('Bogdan', 29);

echo $user->getName() . '<br>';
echo $user->getAge() . '<br>';
$user->setAge(30);
echo $user->getAge();

