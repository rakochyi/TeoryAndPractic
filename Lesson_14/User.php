<?php

namespace TeoryAndPractic\Lesson_14;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_14
 */
class User
{
    /**
     * @var string
     */
    public $surname;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $patronymic;


    /**
     * User constructor.
     * @param $surname
     * @param $name
     * @param $patronymic
     */
    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}

$user = new User('Rakochyi', 'Bogdan', 'Igorovych');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]} . ' ';
echo $user->{$props[1]} . ' ';
echo $user->{$props[2]};