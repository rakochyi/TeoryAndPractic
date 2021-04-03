<?php

namespace TeoryAndPractic\Lesson_55\Test;

class Test
{

    /**
     * @var mixed
     */
    private $prop1;

    /**
     * @var mixed
     */
    private $prop2;


    /**
     * @param $property
     * @param $value
     */
    public function __set($property, $value)
    {
        $properties = ['prop1', 'prop2'];
        if (in_array($property, $properties)) {
            $this->$property = $value;
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
$test = new Test;
$test->prop1 = 1;
$test->prop2 = 2;

echo $test->prop1 . '<br>';
echo $test->prop2;

