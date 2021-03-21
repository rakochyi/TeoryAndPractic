<?php

namespace TeoryAndPractic\Lesson_30\Num;

/**
 * Class Num
 * @package TeoryAndPractic\Lesson_30\Num
 */
class Num
{
    /**
     * @var int
     */
    private static $num1 = 2;

    /**
     * @var int
     */
    private static $num2 = 3;


    /**
     * @param $num1
     * @param $num2
     * @return int
     */
    public static function getSum($num1, $num2)
    {
        return self::$num1 + self::$num2;
    }
}
echo Num::getSum(2,3);