<?php

namespace TeoryAndPractic\Lesson_39;

/**
 * Interface iRectangle
 * @package TeoryAndPractic\Lesson_39
 */
interface iRectangle
{
    /**
     * iRectangle constructor.
     * @param $a
     * @param $b
     */
    public function __construct($a, $b);

    /**
     * @return mixed
     */
    public function getSquare();

    /**
     * @return mixed
     */
    public function getPerimeter();
}