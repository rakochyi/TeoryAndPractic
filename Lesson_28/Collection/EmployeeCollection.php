<?php

namespace TeoryAndPractic\Lesson_28\Collection;

use TeoryAndPractic\Lesson_28\Employee;

/**
 * Class EmployeeCollection
 * @package TeoryAndPractic\Lesson_28\Collection
 */
class EmployeeCollection
{
    /**
     * @var array
     */
    private $employees = [];


    /**
     * @param $employee
     */
    public function add(Employee $employee)
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