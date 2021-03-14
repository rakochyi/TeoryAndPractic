<?php

namespace TeoryAndPractic\Lesson_18;

/**
 * Class ArraySumHelper_1
 * @package TeoryAndPractic\Lesson_18
 */
class ArraySumHelper_1
{
    /**
     * @param $arr
     * @return int|mixed
     */
    public function getSum1($arr)
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += $elem;
        }
        return $sum;
    }


    /**
     * @param $arr
     * @return float|int
     */
    public  function getSum2($arr)
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, 2);
        }
        return $sum;
    }


    /**
     * @param $arr
     * @return float|int
     */
    public  function getSum3($arr)
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, 3);
        }
        return $sum;
    }


    /**
     * @param $arr
     * @return float|int
     */
    public  function getSum4($arr)
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, 4);
        }
        return $sum;
    }
}

$arraySumHelper = new ArraySumHelper_1;

$arr = [1, 2, 3];
echo $arraySumHelper->getSum1($arr) . '<br>';
echo $arraySumHelper->getSum2($arr) . '<br>';
echo $arraySumHelper->getSum3($arr) . '<br>';
echo $arraySumHelper->getSum4($arr) . '<br>';