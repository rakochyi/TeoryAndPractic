<?php

namespace TeoryAndPractic\Lesson_41;

require_once "Figure.php";
/**
 * Interface Figure3d
 * @package TeoryAndPractic\Lesson_41
 */
interface Figure3d extends Figure
{
    /**
     * @return mixed
     */
    public function getVolume();

    /**
     * @return mixed
     */
    public function getSurfaceSquare();
}