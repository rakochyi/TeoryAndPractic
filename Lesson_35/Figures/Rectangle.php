<?php

namespace TeoryAndPractic\Lesson_35\Figures;

require_once "Figure.php";

/**
 * Class Rectangle
 * @package TeoryAndPractic\Lesson_35\Figures
 */
class Rectangle extends Figure
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
$rectangle = new Rectangle(3, 6);
echo $rectangle->getSquare() . ' - this is rectangle\'s square ' . '<br>';
echo $rectangle->getPerimeter() . ' - this is rectangle\'s perimeter <br>';
echo $rectangle->getRatio() . '<br>';
echo $rectangle->getSquarePerimeterSum();