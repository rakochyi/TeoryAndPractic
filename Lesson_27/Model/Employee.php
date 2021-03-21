<?php

namespace TeoryAndPractic\Lesson_27\Model;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_27\Model
 */
class Employee extends \TeoryAndPractic\Lesson_27\Model\User
{
    /**
     * @var mixed
     */
    public $salary;


    /**
     * Employee constructor.
     * @param $name
     * @param $surname
     * @param $salary
     */
    public function __construct($name, $surname, $salary)
    {
        parent::__construct($name, $surname);
        $this->salary = $salary;
    }


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }
}

$employee1 = new Employee('Bogdan', 'Rakochyi', 1000);
$employee2 = new Employee('Bogdan', 'Rakochyi', 1000);
$employee3 = new Employee('Bogdan', 'Rakochyi', 1000);

$arr = [];
array_unshift($arr, $employee1, $employee2, $employee3);

foreach ($arr as $item) {
    if ($item->getName() != User::class) {
        echo $item->getName();
    }
}
