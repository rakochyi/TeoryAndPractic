<?php

namespace TeoryAndPractic\Lesson_13;

/**
 * Class Arr
 * @package TeoryAndPractic\Lesson_13
 */
class Arr
{
    /**
     * @var array
     */
    private $numbers = [];


    /**
     * @param $num
     */
    public function add($num)
    {
        $this->numbers[] = $num;
    }


    /**
     * @return float|int
     */
    public function getSum()
    {
        return array_sum($this->numbers) / count($this->numbers);
    }
}

$arr = new Arr;

$arr->add(2);
$arr->add(4);
$arr->add(6);
$arr->add(8);

echo $arr->getSum();