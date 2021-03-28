<?php

namespace TeoryAndPractic\Lesson_35\Figures;

use mysql_xdevapi\TableInsert;

require_once "Figure.php";


/**
 * Class Quadrate
 * @package TeoryAndPractic\Lesson_35\Figures
 */
class Quadrate extends Figure
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
echo $quadrate->getSquare() . ' - this is quadrate\'s square <br>';
echo $quadrate->getPerimeter() . ' - this is quadrate\'s perimeter <br>';
echo $quadrate->getRatio() . '<br>';
echo $quadrate->getSquarePerimeterSum();