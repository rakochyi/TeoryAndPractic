<?php

namespace TeoryAndPractic\Lesson_3;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_3
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
     * @param $var
     * @return string
     */
    public function show($var)
    {
        return $var;
    }
}
$user = new User;
$user->name = 'Bogdan';
$user->age = 29;

echo $user->name . ' - ' . $user->age . ' ' . $user->show('years');