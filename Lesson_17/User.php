<?php

namespace TeoryAndPractic\Lesson_17;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_17
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
     * @param mixed $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $surname1 = $surname;
        return $this;
    }


    /**
     * @param mixed $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $name;
    }


    /**
     * @param mixed $patronymic
     * @return User
     */
    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
        return $this;
    }


    public function getFullName()
    {
        $arr1 = explode('', $this->setSurname());
        $arr2 = explode('', $this->setName());
        $arr3 = explode('', $this->setPatronymic());

        return $arr1[0] . '.' . $arr2[0] . '.' . $arr3[0];
    }
}

echo (new User)->setSurname('Rakochyi')->setName('Bogdan')->setPatronymic('Igorovych')->getFullName();