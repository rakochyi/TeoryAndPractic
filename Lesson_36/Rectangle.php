<?php

namespace TeoryAndPractic\Lesson_36;

require_once "Figure.php";
/**
 * Class Rectangle
 * @package TeoryAndPractic\Lesson_36
 */
class Rectangle implements Figure
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
$rectangle = new Rectangle(2, 4);
echo $rectangle->getSquare() . '<br>';
echo $rectangle->getPerimeter();