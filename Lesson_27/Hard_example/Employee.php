<?php

namespace TeoryAndPractic\Lesson_27\Hard_example;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_27\Hard_example
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
     * @return string
     */
    public function getName(): string
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