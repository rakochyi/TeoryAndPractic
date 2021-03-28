<?php

namespace TeoryAndPractic\Lesson_41;

require_once "Figure3d.php";
require_once "Figure.php";

/**
 * Class Cube
 * @package TeoryAndPractic\Lesson_41
 */
class Cube implements Figure3d
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
     * Cube constructor.
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
    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
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
    public function getSurfaceSquare()
    {
        return 6 * ($this->a * $this->b);
    }


    /**
     * @return float|int|mixed
     */
    public function getVolume()
    {
        return pow($this->a, 2) * $this->b;
    }
}
$cube1 = new Cube(3, 3);
$cube2 = new Cube(2, 2);

$quadrate1 = new Quadrate(3, 3);
$quadrate2 = new Quadrate(2, 2);

$rectangle1 = new Rectangle(3, 6);
$rectangle2 = new Rectangle(4, 5);

$arr = [];
array_push($arr, $cube1, $cube2, $quadrate1, $quadrate2, $rectangle1, $rectangle2);
shuffle($arr);

foreach ($arr as $elem) {
    echo $elem->getSquare();
}

foreach ($arr as $elem) {
    echo $elem->getSurfaceSquare();
}

foreach ($arr as $elem) {
    echo $elem->getVolume();
}