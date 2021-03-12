<?php

namespace TeoryAndPractic\Lesson_4;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_4
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
    public $age;

    /**
     * @var integer
     */
    public $salary;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return string
     */
    public function checkAge()
    {
        if($this->age >= 18)
        {
            return 'True';
        } else {
            return 'False';
        }
    }

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

}
$employee1 = new Employee;

$employee1->name = 'Bogdan';
$employee1->age = 29;
$employee1->salary = 1000;

$employee2 = new Employee;

$employee2->name = 'Julia';
$employee2->age = 28;
$employee2->salary = 250;

echo $employee1->getSalary() + $employee2->getSalary() . '<br>';

$employee1->setName('Bogdan Rakochyi');
$employee2->setName('Julia Rakocha');

echo $employee1->getName() . ' and ' . $employee2->getName();