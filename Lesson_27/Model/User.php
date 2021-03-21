<?php

namespace TeoryAndPractic\Lesson_27\Model;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_27\Model
 */
class User
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $surname;


    /**
     * User constructor.
     * @param $name
     * @param $surname
     */
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }
}

$user1 = new User('Bogdan', 'Rakochyi');
$user2 = new User('Bogdan', 'Rakochyi');
$user3 = new User('Bogdan', 'Rakochyi');

$arr = [];
array_unshift($arr, $user1, $user2, $user3);

foreach ($arr as $elem) {
    if ($elem->getName() == User::class) {
        echo $elem->getName();
    }
}