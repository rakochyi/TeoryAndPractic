<?php

namespace TeoryAndPractic\Lesson_24;

/**
 * Class SumHelper
 * @package TeoryAndPractic\Lesson_24
 */
class SumHelper
{
    /**
     * @param $arr
     * @return float|int
     */
    public function getSum2($arr)
    {
        return $this->getSum($arr, 2);
    }


    /**
     * @param $arr
     * @return float|int
     */
    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }


    /**
     * @param $arr
     * @param $power
     * @return float|int
     */
    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $item) {
            $sum += pow($item, $power);
        }
        return $sum;
    }
}