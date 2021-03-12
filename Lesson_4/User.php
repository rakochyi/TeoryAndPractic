<?php

namespace TeoryAndPractic\Lesson_4;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_4
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
     * @return string
     */
    public function show()
    {
        return $this->name;
    }
}
$user = new User;

$user->name = 'Bogdan ';
$user->age = 29;

echo $user->show();
