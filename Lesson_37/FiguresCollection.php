<?php

namespace TeoryAndPractic\Lesson_37;

require_once "Figure.php";

use TeoryAndPractic\Lesson_36\Disk;
use TeoryAndPractic\Lesson_36\Figure;
use TeoryAndPractic\Lesson_36\Quadrate;
use TeoryAndPractic\Lesson_36\Rectangle;


/**
 * Class FiguresCollection
 * @package TeoryAndPractic\Lesson_37
 */
class FiguresCollection
{
    /**
     * @var array
     */
    private $figures = [];


    /**
     * @param \TeoryAndPractic\Lesson_36\Figure $figure
     */
    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
    }


    /**
     * @return int
     */
    public function getTotalSquare()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare();
        }
        return $sum;
    }


    /**
     * @return int
     */
    public function getTotalPerimeter()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }
        return $sum;
    }
}
$figuresCollection = new FiguresCollection;

echo $figuresCollection->getTotalSquare();

echo $figuresCollection->getTotalPerimeter();



