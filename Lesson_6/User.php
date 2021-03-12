<?php

namespace TeoryAndPractic\Lesson_6;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_6
 */
class User
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
     * @param $age
     */
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }


    /**
     * @param $years
     */
    public function addAge($years)
    {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    /**
     * @param $years
     */
    public function subAge($years)
    {
        $this->age = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
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

$user = new User;
$user->setAge(30);
echo $user->age . '<br>';
$user->setAge(10);
echo $user->age . '<br>';
$user->setAge(20);
echo $user->age . '<br>';

$customer = new User;
$customer->setAge(28);
echo $customer->age . '<br>';
$customer->setAge(29);
echo $customer->age;