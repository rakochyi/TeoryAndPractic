<?php

namespace TeoryAndPractic\Lesson_17;

/**
 * Class Arr
 * @package TeoryAndPractic\Lesson_17
 */
class Arr
{
    /**
     * @var array
     */
    private $numbers = [];


    /**
     * @param $number
     * @return $this
     */
    public function add($number)
    {
        $this->numbers[] = $number;
        return $this;
    }


    /**
     * @param $array
     * @return $this
     */
    public function append($array)
    {
        $this->numbers[] = array_push($array);
        return $this;
    }



    /**
     * @return float|int
     */
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

$arr = new Arr;

echo $arr->add(1)->add(2)->add(3)->add(4)->getSum() . '<br>';
echo (new Arr)->add(1)->add(2)->add(3)->getSum() . '<br>';
echo (new Arr)->add(1)->append([2])->add(5)->getSum();