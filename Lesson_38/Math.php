<?php

namespace TeoryAndPractic\Lesson_38;

require_once "iMath.php";

/**
 * Class Math
 * @package TeoryAndPractic\Lesson_38
 */
class Math implements iMath
{

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function sum($a, $b)
    {
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int|mixed
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int|mixed
     */
    public function divide($a, $b)
    {
        return $a / $b;
    }
}
$math = new Math;
echo $math->sum(3, 2) . '<br>';
echo $math->subtract(3, 2) . '<br>';
echo $math->multiply(3, 2) . '<br>';
echo $math->divide(3, 2);