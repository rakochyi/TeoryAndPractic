<?php

namespace TeoryAndPractic\Lesson_25;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_25
 */
class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $salary;


    /**
     * Employee constructor.
     * @param $name
     * @param $salary
     */
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
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
    public function getSalary()
    {
        return $this->salary;
    }
}