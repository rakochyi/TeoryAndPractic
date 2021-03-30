<?php

namespace TeoryAndPractic\Lesson_42;

require_once "Figure.php";
require_once "Tetragon.php";


/**
 * Class Rectangle
 * @package TeoryAndPractic\Lesson_42
 */
class Rectangle implements Figure, Tetragon
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
     * @return mixed
     */
    public function A()
    {
        return $this->a;
    }


    /**
     * @return mixed
     */
    public function B()
    {
        return $this->b;
    }


    /**
     * @return mixed
     */
    public function C()
    {
        return $this->a;
    }


    /**
     * @return mixed
     */
    public function D()
    {
        return $this->b;
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
$rectangle = new Rectangle(4, 6);

echo $rectangle->getSquare() . '<br>';
echo $rectangle->getPerimeter();