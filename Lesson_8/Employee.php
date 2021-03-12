<?php

namespace TeoryAndPractic\Lesson_8;

class Employee
{

    private $name;
    private $age;
    private $salary;

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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
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
     * @param mixed $age
     */
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary . '$';
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @param $age
     * @return bool
     */
    private function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;
    }
}
$employee = new Employee('Bogdan', 29, 1000);

echo $employee->getName() . ' - ';
echo $employee->getAge() . ' - ';
echo $employee->getSalary() . '.';
