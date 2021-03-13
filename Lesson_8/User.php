<?php

namespace TeoryAndPractic\Lesson_8;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_8
 */
class User
{
    /**
     * @var
     */
    public $name;
    private $age;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {

        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        } else {
            echo 'Php is cool';
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

$user->setAge(67);

echo $user->getAge();