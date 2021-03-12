<?php

namespace TeoryAndPractic\Lesson_4;

/**
 * Class Rectangle
 * @package TeoryAndPractic\Lesson_4
 */
class Rectangle
{
    /**
     * @var integer
     */
    public $length;

    /**
     * @var integer
     */
    public $width;

    /**
     * @return float|int
     */
    public function getSquare()
    {
        return $this->length * $this->width;
    }

    /**
     * @return int
     */
    public function getPerimeter()
    {
        return $this->length + $this->width;
    }
}

$rectangle = new Rectangle;
$rectangle->length = 100;
$rectangle->width = 50;

echo $rectangle->getSquare() . ' - this is rectangle`s square. <br>';
echo $rectangle->getPerimeter() . ' - this is rectangle`s perimeter.';
