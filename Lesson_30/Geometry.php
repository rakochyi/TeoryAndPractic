<?php

namespace TeoryAndPractic\Lesson_30;

/**
 * Class Geometry
 * @package TeoryAndPractic\Lesson_30
 */
class Geometry
{
    /**
     * @var float
     */
    private static $pi = 3.14;


    /**
     * @param $radius
     * @return float|int
     */
    public static function getCircleSquare($radius)
    {
        return self::$pi * pow($radius, 2);
    }


    /**
     * @param $radius
     * @return float|int
     */
    public static function getCircleCircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }


    /**
     * @param $radius
     * @return float|int
     */
    public static function getVolumeSphere($radius)
    {
        return 1.333 * self::$pi * pow($radius, 3);
    }
}
echo Geometry::getCircleCircuit(10) . '<br>';
echo Geometry::getCircleSquare(10) . '<br>';
echo Geometry::getVolumeSphere(10);
