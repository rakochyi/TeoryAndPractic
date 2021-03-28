<?php

namespace TeoryAndPractic\Lesson_40\Users\Employee;

use TeoryAndPractic\Lesson_40\iEmployee;

require_once "iEmployee.php";

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_40
 */
class Employee implements iEmployee
{
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param $name
     * @return mixed|void
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


    /**
     * @param $age
     * @return mixed|void
     */
    public function setAge($age)
    {
        $this->age = $age;
    }


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }


    /**
     * @param $salary
     * @return mixed|void
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$employee = new Employee;

$employee->setName('Bogdan');
$employee->setAge(29);
$employee->setSalary(1000);

echo $employee->getName() . ' - ' . $employee->getAge() . ' - ' . $employee->getSalary();