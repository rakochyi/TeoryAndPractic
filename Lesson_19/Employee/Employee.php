<?php

namespace TeoryAndPractic\Lesson_19\Employee;

use TeoryAndPractic\Lesson_19\User;
/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_19\Employee
 */
class Employee extends User
{
    /**
     * @var integer
     */
    private int $salary;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }


    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$employee = new Employee;

$employee->setSalary(1000);
$employee->setName('Bogdan');
$employee->setAge(29);

echo $employee->getName() . ' - ' . $employee->getAge() . ' - ' . $employee->getSalary();