<?php

namespace TeoryAndPractic\Lesson_2;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_2
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
}


$employee1 = new Employee;

$employee1->name = 'Bogdan';
$employee1->age = 29;
$employee1->salary = 800;


$employee2 = new Employee;

$employee2->name = 'Julia';
$employee2->age = 28;
$employee2->salary = 250;


echo $employee1->salary + $employee2->salary . '<br>';

echo $employee1->age + $employee2->age;