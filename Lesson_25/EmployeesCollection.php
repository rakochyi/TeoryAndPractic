<?php

namespace TeoryAndPractic\Lesson_24;

use TeoryAndPractic\Lesson_25\Employee;

/**
 * Class EmployeesCollection
 * @package TeoryAndPractic\Lesson_24
 */
class EmployeesCollection
{
    /**
     * @var array
     */
    private $employees = [];


    /**
     * @return array
     */
    public function get()
    {
        return $this->employees;
    }


    /**
     * @return int
     */
    public function count()
    {
        return count($this->employees);
    }

    /**
     * @param $employee
     */
    public function add($employee)
    {
        $this->employees[] = $employee;
    }


    /**
     * @return int
     */
    public function getTotalSalary()
    {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }
        return $sum;
    }
}

$employeesCollection = new EmployeesCollection;

$employeesCollection->add(new Employee('Bogdan', 1000));
$employeesCollection->add(new Employee('Julia', 250));

echo $employeesCollection->getTotalSalary();