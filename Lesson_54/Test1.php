<?php

namespace TeoryAndPractic\Lesson_54;

/**
 * Class Test1
 * @package TeoryAndPractic\Lesson_54
 */
class Test1
{
    /**
     * @var int
     */
    private $prop1 = 1;

    /**
     * @var int
     */
    private $prop2 = 2;


    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->$property;
    }
}
$test1 = new Test1;


