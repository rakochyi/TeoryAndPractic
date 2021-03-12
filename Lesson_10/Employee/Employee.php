<?php

namespace TeoryAndPractic\Lesson_10\Employee;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_10\Employee
 */
class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $patronymic;

    /**
     * @var integer
     */
    private $salary;


    /**
     * Employee constructor.
     * @param $name
     * @param $surname
     * @param $patronymic
     * @param $salary
     */
    public function __construct($name, $surname, $patronymic, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->salary = $salary;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }


    /**
     * @return string
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }


    /**
     * @return int
     */
    public function getSalary()
    {
        return $this->salary . '$';
    }


    /**
     * @param int $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}