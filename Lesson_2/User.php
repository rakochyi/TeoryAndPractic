<?php

namespace TeoryAndPractic\Lesson_2;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_2
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
}
$user1 = new User;

$user1->name = 'Bogdan';
$user1->age = 29;

//echo  $user->name . ' - ';
//echo  $user->age . ' years. ';

$user2 = new User;
$user2->name = 'Julia';
$user2->age = 28;

echo  $user1->age + $user2->age;