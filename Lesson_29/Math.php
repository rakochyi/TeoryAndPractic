<?php

namespace TeoryAndPractic\Lesson_29;

/**
 * Class Math
 * @package TeoryAndPractic\Lesson_29
 */
class Math
{

    public static function getDoubleSum($a, $b)
    {
        return 2 * self::getSum($a, $b);
    }



    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public static function getSum($a, $b)
    {
        return $a + $b;
    }


    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public static function getProduct($a, $b)
    {
        return $a * $b;
    }
}
echo Math::getSum(1, 2) + Math::getProduct(3, 4);
echo '<br>';
echo Math::getDoubleSum(1,2);
