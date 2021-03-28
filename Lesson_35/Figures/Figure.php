<?php

namespace TeoryAndPractic\Lesson_35\Figures;

/**
 * Class Figure
 * @package TeoryAndPractic\Lesson_35\Figures
 */
abstract class Figure
{
    /**
     * @return mixed
     */
    abstract public function getSquare();



    /**
     * @return mixed
     */
    abstract public function getPerimeter();




    /**
     * @return float|int
     */
    public function getRatio()
    {
        return $this->getSquare() / $this->getPerimeter();
    }




    /**
     * @return mixed
     */
    public function getSquarePerimeterSum()
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}