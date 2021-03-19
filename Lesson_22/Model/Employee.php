<?php

namespace TeoryAndPractic\Lesson_22\Model;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_22\Model
 */
class Employee extends User
{
    /**
     * @var integer
     */
    private $salary;


    /**
     * Employee constructor.
     * @param $name
     * @param $surname
     * @param $birthday
     * @param $salary
     */
    public function __construct($name, $surname, $birthday, $salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }
}