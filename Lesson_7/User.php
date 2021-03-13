<?php

namespace TeoryAndPractic\Lesson_7;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_7
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
$user = new User('Bogdan', 29);

echo $user->name . ' - ';
echo $user->age;