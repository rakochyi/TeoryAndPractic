<?php

namespace TeoryAndPractic\Lesson_32;

/**
 * Class Circle
 * @package TeoryAndPractic\Lesson_32
 */
class Circle
{
    /**
     * @var float
     */
    const PI = 3.14;

    /**
     * @var integer
     */
    private $radius;


    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }


    /**
     * @param $radius
     * @return float|int
     */
    public function getCircleSquare($radius)
    {
        return self::PI * pow($radius, 2);
    }


    /**
     * @param $radius
     * @return float|int
     */
    public function getCircleCircuit($radius)
    {
        return 2 * self::PI * $radius;
    }
}
$circle = new Circle(10);

echo $circle->getCircleSquare(10) . '<br>';
echo $circle->getCircleCircuit(10);

