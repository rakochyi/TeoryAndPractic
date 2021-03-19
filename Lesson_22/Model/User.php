<?php

namespace TeoryAndPractic\Lesson_22\Model;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_22\Model
 */
class User
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $surname;

    /**
     * @var mixed
     */
    protected $birthday;


    /**
     * User constructor.
     * @param $name
     * @param $surname
     * @param $birthday
     */
    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = date('Y-m-d');
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }


    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
}