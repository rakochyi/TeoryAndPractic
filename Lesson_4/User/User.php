<?php

namespace TeoryAndPractic\Lesson_4\User;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_4\User
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     * @return mixed
     */
    public function setAge($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        } else {
            'You not have 18 years old';
        }
    }
}


$user = new User;
$user->name = 'Ivan';
$user->age = 7;

$user->setName('Bogdan Rakochyi');
$user->setAge(9);

echo $user->getName() . ' - ' . $user->getAge() . '<br>';

