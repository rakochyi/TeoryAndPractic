<?php

namespace TeoryAndPractic\Lesson_39;

require_once "iUser.php";

/**
 * Class User
 * @package TeoryAndPractic\Lesson_39
 */
class User implements iUser
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


    /**
     * @return mixed|string
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

echo $user->getName() . ' - ';
echo $user->getAge();