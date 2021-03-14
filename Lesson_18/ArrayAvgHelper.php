<?php

namespace TeoryAndPractic\Lesson_18;

/**
 * Class ArrayAvgHelper
 * @package TeoryAndPractic\Lesson_18
 */
class ArrayAvgHelper
{
    /**
     * @param $num
     * @return float|int
     */
    public function getAvg_1($num)
    {
        return $this->calcSqrt($num, 1/1);
    }


    /**
     * @param $num
     * @return float|int
     */
    public function getAvg_2($num)
    {
        return $this->calcSqrt($num, 1/2);
    }


    /**
     * @param $num
     * @return float|int
     */
    public function getAvg_3($num)
    {
        return $this->calcSqrt($num, 1/3);
    }


    /**
     * @param $num
     * @return float|int
     */
    public function getAvg_4($num)
    {
        return $this->calcSqrt($num, 1/4);
    }


    /**
     * @param $arr
     * @param $power
     * @return float|int
     */
    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $elem){
            $sum += pow($elem, $power);
        }
        return $sum;
    }


    /**
     * @param $num
     * @param $power
     * @return float|int
     */
    private function calcSqrt($num, $power)
    {
        return pow($num, $power);
    }
}
$arrayAvgHelper = new ArrayAvgHelper;
$num = 100;

echo $arrayAvgHelper->getAvg_1($num) . '<br>';
echo $arrayAvgHelper->getAvg_2($num) . '<br>';
echo $arrayAvgHelper->getAvg_3($num) . '<br>';
echo $arrayAvgHelper->getAvg_4($num) . '<br>';