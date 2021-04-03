<?php

namespace TeoryAndPractic\Lesson_54\User;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_54\User
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


    /**
     * @param $property
     * @return string
     */
    public function __get($property)
    {
        if ($property == 'fullname') {
            return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
        }
    }
}
$user = new User('Rakochyi', 'Bogdan', 'Igorovych');

echo $user->fullname;