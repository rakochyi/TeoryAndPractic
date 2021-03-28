<?php

namespace TeoryAndPractic\Lesson_35;

/**
 * Class User
 * @package TeoryAndPractic\Lesson_35
 */
abstract class User
{
    /**
     * @var string
     */
    private $name;


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
    public function setName($name): void
    {
        $this->name = $name;
    }


    /**
     * @param $value
     * @return mixed
     */
    abstract public function increaseRevenue($value);


    /**
     * @param $value
     * @return mixed
     */
    abstract public function inDicreaseRevenue($value);
}
