<?php

namespace TeoryAndPractic\Lesson_36;

require_once "Figure.php";

/**
 * Class Disk
 * @package TeoryAndPractic\Lesson_36
 */
class Disk implements Figure
{
    /**
     * @var mixed
     */
    private $radius;


    /**
     * Constant Pi = 3.14
     */
    const PI = 3.14;


    /**
     * Disk constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }


    /**
     * @return float|int|mixed
     */
    public function getSquare()
    {
        return self::PI * pow($this->radius, 2);
    }


    /**
     * @return float|int|mixed
     */
    public function getPerimeter()
    {
        return 2 * self::PI * $this->radius;
    }
}
$disk = new Disk(10);
echo $disk->getSquare() . '<br>';
echo $disk->getPerimeter();
