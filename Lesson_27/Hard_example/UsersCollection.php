<?php

namespace TeoryAndPractic\Lesson_27\Hard_example;

/**
 * Class UsersCollection
 * @package TeoryAndPractic\Lesson_27\Hard_example
 */
class UsersCollection
{
    /**
     * @var array
     */
    private $employees = [];

    /**
     * @var array
     */
    private $students = [];


    /**
     * @param $user
     */
    public function add($user)
    {
        if ($user instanceof Employee) {
            $this->employees[] = $user;
        }

        if ($user instanceof Student)
        {
            $this->students[] = $user;
        }
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


    /**
     * @return int
     */
    public function getTotalScholarship()
    {
        $sum = 0;
        foreach ($this->students as $student){
            $sum += $student->getScholarship();
        }
        return $sum;
    }


    /**
     * @return int
     */
    public function getTotalPayment()
    {
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }
}

$userCollection = new UsersCollection;

$userCollection->add(new Student('Bogdan', 2000));
$userCollection->add(new Student('Bogdan', 3000));

$userCollection->add(new Employee('Bogdan', 4000));
$userCollection->add(new Employee('Bogdan', 5000));

echo $userCollection->getTotalSalary();
echo $userCollection->getTotalScholarship();
echo $userCollection->getTotalPayment();