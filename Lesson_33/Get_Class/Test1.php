<?php

namespace TeoryAndPractic\Lesson_33\Get_Class;

/**
 * Class Test1
 * @package TeoryAndPractic\Lesson_33\Get_Class
 */
class Test1
{
    /**
     * @var mixed
     */
    private $name;

    /**
     * @var array
     */
    protected $tests1 = [];


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
}
$test1 = new Test1;
$test2 = new Test1;
$test3 = new Test1;

$tests1 = array_unshift($test1, $test2, $test3);