<?php

namespace TeoryAndPractic\Lesson_55;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_55
 */
class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $age;


    /**
     * @param $property
     * @param $value
     */
    public function __set($property, $value)
    {
        switch ($property) {
            case 'name':
                if ($value != '') {
                    $this->$property = $value;
                }
            break;

            case 'age':
                if ($value >= 0 and $value <= 70) {
                    $this->$property = $value;
                }
            break;

            default:

            break;
        }
    }


    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->$property;
    }
}
$user = new User;

$user->name = 'Bogdan';
$user->age = 29;

echo $user->name . '<br>';
echo $user->age;
