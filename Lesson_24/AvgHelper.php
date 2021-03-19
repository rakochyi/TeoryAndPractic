<?php

namespace TeoryAndPractic\Lesson_24;

/**
 * Class AvgHelper
 * @package TeoryAndPractic\Lesson_24
 */
class AvgHelper
{
    /**
     * @param $arr
     * @return float|int
     */
    public function getAvg($arr)
    {
        $getAvg = array_sum($arr) / count($arr);
        return $getAvg;
    }


    /**
     * @param $arr
     * @return float|int
     */
    public function getMeanSquare($arr)
    {
        $getMeanSquare = sqrt(array_sum($arr)) / count($arr);
        return $getMeanSquare;
    }
}