<?php

namespace TeoryAndPractic\Lesson_46;

require_once "Helper.php";

/**
 * Class User
 * @package TeoryAndPractic\Lesson_46
 */
class User
{
    /**
     * Trait Helper
     */
    use Helper;


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
echo $user->getName() . ' - ';
echo $user->getAge();