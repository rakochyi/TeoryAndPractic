<?php

namespace TeoryAndPractic\Lesson_4\Employee;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_4\Employee
 */
class Employee
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $salary;

    /**
     * @return float|int
     */
    public function doubleSalary()
    {
        return $this->salary * 2;
    }
}
$employee = new Employee;
$employee->name = 'Bogdan';
$employee->salary = 850;

echo $employee->doubleSalary();