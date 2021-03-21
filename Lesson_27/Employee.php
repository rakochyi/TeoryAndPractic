<?php

namespace TeoryAndPractic\Lesson_27;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_27
 */
class Employee
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $salary;

    /**
     * Employee constructor.
     * @param $name
     * @param $salary
     */
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }


    /*
    public function sumSalary(){
        $sum = 0;

        foreach ($this->salary as $item) {
            $sum += $item->getSalary();
        }
    }
    */
}

$employee1 = new Employee('Bogdan', 2900);
$employee2 = new Employee('Ivan', 2900);
$employee3 = new Employee('Stepan', 2900);
$arr = [];
array_unshift($arr, $employee1, $employee2, $employee3);

foreach ($arr as $elem) {
    echo $elem . '<br>';
}

$sum = 0;
foreach ($this->arr as $salary) {
    $sum += $salary->getSalary();
}
