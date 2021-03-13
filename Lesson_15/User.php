<?php

namespace TeoryAndPractic\Lesson_15;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_15
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
}

$user = new User('Bogdan', 29);

$methods = [ 'method1' => 'getName', 'method2' => 'getAge'];

echo $user->{$methods['method1']}() . ' - ';
echo $user->{$methods['method2']}();