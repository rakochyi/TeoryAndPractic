<?php

namespace TeoryAndPractic\Lesson_42;


require_once "Figure.php";
require_once "Tetragon.php";

/**
 * Class Quadrate
 * @package TeoryAndPractic\Lesson_42
 */
class Quadrate implements Figure, Tetragon
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
        return $this->a;
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
        return $this->a;
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
$quadrate = new Quadrate(4);
echo '<pre>';
var_dump($quadrate);
echo '</pre> <br>';

echo $quadrate->getSquare() . '<br>';

echo $quadrate->getPerimeter();