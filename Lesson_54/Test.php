<?php

namespace TeoryAndPractic\Lesson_54;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_54
 */
class Test
{
    /**
     * @var int
     */
    public $prop1 = 1;

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
        return $property;
    }
}
$test = new Test;

echo $test->prop1 . '<br>';
echo $test->prop3;

