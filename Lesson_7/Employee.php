<?php

namespace TeoryAndPractic\Lesson_7;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_7
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
     * Employee constructor.
     * @param $name
     * @param $age
     * @param $salary
     */
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$employee_vasia = new Employee('Vasia', 25, 1000);
$employee_petia = new Employee('Petia', 30, 2000);

echo $employee_vasia->salary + $employee_petia->salary;