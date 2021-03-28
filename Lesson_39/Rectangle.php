<?php

namespace TeoryAndPractic\Lesson_39;

require_once "iRectangle.php";

/**
 * Class Rectangle
 * @package TeoryAndPractic\Lesson_39
 */
class Rectangle implements iRectangle
{
    /**
     * @var mixed
     */
    private $a;

    /**
     * @var mixed
     */
    private $b;


    /**
     * Rectangle constructor.
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    /**
     * @return float|int|mixed
     */
    public function getSquare()
    {
        return $this->a * $this->b;
    }


    /**
     * @return float|int|mixed
     */
    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
    }
}
$rectangle = new Rectangle(2, 8);
echo $rectangle->getSquare() . ' - square <br>';
echo $rectangle->getPerimeter() . ' - perimeter';