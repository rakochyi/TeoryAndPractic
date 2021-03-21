<?php

namespace TeoryAndPractic\Lesson_31;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_31
 */
class User
{
    /**
     * @var mixed
     */
    private static $count = 0;


    /**
     * @var mixed
     */
    public $name;


    /**
     * User constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;

        self::$count++;
    }


    /**
     * @return mixed
     */
    public static function getCount()
    {
        return self::$count;
    }
}

$user1 = new User('User1');
echo User::getCount() . '<br>';

$user2 = new User('User2');
echo User::getCount() . '<br>';

$user3 = new User('User3');
echo User::getCount() . '<br>';

$user4 = new User('User4');
echo User::getCount();