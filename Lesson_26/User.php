<?php

namespace TeoryAndPractic\Lesson_26;

use function Sodium\compare;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_26
 */
class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var mixed
     */
    private $age;


    /**
     * User constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


    /**
     * @param $user1
     * @param $user2
     * @return bool
     */
    function compare($user1, $user2)
    {
        if ($user1 === $user2) {
            return 1;
        } elseif ($user1 == $user2) {
            return 0;
        } else {
            return -1;
        }
    }
}

$user1 = new User('Bogdan', 29);
$user2 = new User('Bogdan', 29);

echo '<pre>';

echo $user1->compare($user1, $user2);