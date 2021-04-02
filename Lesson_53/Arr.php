<?php

namespace TeoryAndPractic\Lesson_53;

/**
 * Class Arr
 * @package TeoryAndPractic\Lesson_53
 */
class Arr
{
    private $numbers = [];


    public function add($number)
    {
        $this->numbers[] = $number;
        return $this;
    }


    public function __toString()
    {
        return (string) array_sum($this->numbers);
    }
}
$arr = new Arr;
echo $arr->add(1)->add(2)->add(3)->add(4)->add(5);