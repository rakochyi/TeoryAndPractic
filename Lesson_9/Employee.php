<?php

namespace TeoryAndPractic\Lesson_9;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_9
 */
class Employee
{
    private $name;
    private $surname;
    private $salary;


    /**
     * Employee constructor.
     * @param $name
     * @param $surname
     * @param $salary
     */
    public function __construct($name, $surname, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
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
    public function getSurname()
    {
        return $this->surname;
    }


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary . '$';
    }


    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$employee = new Employee('Bogdan', 'Rakochyi', 1000);
echo $employee->getName() . ' ';
echo $employee->getSurname() . ' - ';
$employee->setSalary(1500);
echo $employee->getSalary() . '.';