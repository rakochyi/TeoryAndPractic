<?php

namespace TeoryAndPractic\Lesson_40\Rectangle;

use TeoryAndPractic\Lesson_40\Figure;

require_once "Lesson_40/Figure.php";

/**
 * Interface iRectangle
 * @package TeoryAndPractic\Lesson_40\Rectangle
 */
interface iRectangle extends Figure
{
    /**
     * iRectangle constructor.
     * @param $a
     * @param $b
     */
    public function __construct($a, $b);
}