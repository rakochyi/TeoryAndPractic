<?php

namespace TeoryAndPractic\Lesson_53\SNP;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_53\SNP
 */
class User
{
    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $patronymic;


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
     * @return string
     */
    public function __toString()
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
    }


    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
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
    public function getPatronymic()
    {
        return $this->patronymic;
    }
}
$user = new User('Rakochyi', 'Bogdan', 'Igorovych');
echo $user . '<hr>';
$user1 = new User('Ракочий', "Богдан", "Ігорович");
echo $user1;