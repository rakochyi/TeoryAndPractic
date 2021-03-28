<?php

namespace TeoryAndPractic\Lesson_38;

require_once "iUser.php";

/**
 * Class User
 * @package TeoryAndPractic\Lesson_38
 */
class User implements iUser
{
    /**
     * @param $name
     * @return mixed|void
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param $age
     * @return mixed|void
     */
    public function setAge($age)
    {
        $this->age = $age;
    }


    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}
$user = new User;
$user->setName('Bogdan');
$user->setAge(29);

echo $user->getName() . ' - ';
echo $user->getAge();