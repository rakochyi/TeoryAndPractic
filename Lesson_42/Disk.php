<?php

namespace TeoryAndPractic\Lesson_42;

require_once "Figure.php";
require_once "Circle.php";


/**
 * Class Disk
 * @package TeoryAndPractic\Lesson_42
 */
class Disk implements Figure, Circle
{
    /**
     * @var mixed
     */
    private $length;

    /**
     * Constant PI
     */
    const PI = 3.14;


    /**
     * Disk constructor.
     * @param $length
     */
    public function __construct($length)
    {
        $this->length = $length;
    }


    /**
     * @return float|int|mixed
     */
    public function getRadius()
    {
        return round($this->length / (2 * self::PI), 1);
    }


    /**
     * @return float|int|mixed
     */
    public function getDiameter()
    {
        return round($this->getRadius() * 2, 1);
    }


    /**
     * @return float|int|mixed
     */
    public function getSquare()
    {
        return round(self::PI * pow($this->getRadius(), 2), 1);
    }


    /**
     * @return float|int|mixed
     */
    public function getPerimeter()
    {
        return round( 2 * self::PI * $this->getRadius(), 1);
    }
}
$length = new Disk(15);

echo $length->getRadius() . ' - radius <br>';
echo $length->getDiameter() . ' - diameter <br>';
echo $length->getSquare() . ' - square . <br>';
echo $length->getPerimeter() . ' - perimeter';
