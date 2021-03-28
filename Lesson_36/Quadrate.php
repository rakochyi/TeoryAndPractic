<?php

namespace TeoryAndPractic\Lesson_36;

require_once "Figure.php";

/**
 * Class Quadrate
 * @package TeoryAndPractic\Lesson_36
 */
class Quadrate implements Figure
{
    /**
     * @var mixed
     */
    private $a;


    /**
     * Quadrate constructor.
     * @param $a
     */
    public function __construct($a)
    {
        $this->a = $a;
    }


    /**
     * @return float|int|mixed
     */
    public function getSquare()
    {
        return $this->a * $this->a;
    }


    /**
     * @return float|int|mixed
     */
    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}
$quadrate = new Quadrate(2);
echo $quadrate->getSquare() . '<br>';
echo $quadrate->getPerimeter();