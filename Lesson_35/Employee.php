<?php

namespace TeoryAndPractic\Lesson_35;

require_once "User.php";

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_35
 */
class Employee extends User
{
    /**
     * @var mixed
     */
    private $salary;


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
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }


    /**
     * @param $value
     * @return mixed|void
     */
    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }


    /**
     * @param $value
     * @return mixed|void
     */
    public function inDicreaseRevenue($value)
    {
        $this->salary = $this->salary - $value;
    }
}
$employee = new Employee;
$employee->setName('Bogdan');
$employee->setSalary(1000);
$employee->increaseRevenue('500');
$employee->inDicreaseRevenue('100');

echo $employee->getName() . ' - ';
echo $employee->getSalary();