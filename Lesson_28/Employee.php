<?php

namespace TeoryAndPractic\Lesson_28;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_28
 */
class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var mixed
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