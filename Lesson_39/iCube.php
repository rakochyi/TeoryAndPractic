<?php

namespace TeoryAndPractic\Lesson_39;

/**
 * Interface iCube
 * @package TeoryAndPractic\Lesson_39
 */
interface iCube
{
    /**
     * iCube constructor.
     * @param $a
     */
    public function __construct($a);

    /**
     * @return mixed
     */
    public function getSquareCube();

    /**
     * @return mixed
     */
    public function getVolumeCube();
}