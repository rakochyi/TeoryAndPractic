<?php

namespace TeoryAndPractic\Lesson_44;

/**
 * Interface iSphere
 * @package TeoryAndPractic\Lesson_44
 */
interface iSphere
{
    /**\
     * Constant PI
     */
    const PI = 3.14;

    /**
     * iSphere constructor.
     * @param $radius
     */
    public function __construct($radius);

    /**
     * @return mixed
     */
    public function getVolume();

    /**
     * @return mixed
     */
    public function getSquare();
}