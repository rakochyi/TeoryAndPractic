<?php

namespace TeoryAndPractic\Lesson_29;

/**
 * Class ArraySumHelper
 * @package TeoryAndPractic\Lesson_29
 */
class ArraySumHelper
{
    /**
     * @param $arr
     * @return float|int
     */
    public static function getSum1($arr)
    {
        return self::getSum($arr, 1);
    }


    /**
     * @param $arr
     * @return float|int
     */
    public static function getSum2($arr)
    {
        return self::getSum($arr, 2);
    }


    /**
     * @param $arr
     * @return float|int
     */
    public static function getSum3($arr)
    {
        return self::getSum($arr, 3);
    }


    /**
     * @param $arr
     * @return float|int
     */
    public static function getSum4($arr)
    {
        return self::getSum($arr, 4);
    }


    /**
     * @param $arr
     * @param $power
     * @return float|int
     */
    private static function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }
        return $sum;
    }
}
$arr = range(1, 15);
echo ArraySumHelper::getSum2($arr);