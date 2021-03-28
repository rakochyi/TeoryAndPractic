<?php

namespace TeoryAndPractic\Lesson_41;

/**
 * Interface Figure
 * @package TeoryAndPractic\Lesson_41
 */
interface Figure
{
    /**
     * Figure constructor.
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