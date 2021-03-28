<?php

namespace TeoryAndPractic\Lesson_38;

/**
 * Interface iMath
 * @package TeoryAndPractic\Lesson_38
 */
interface iMath
{
    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function sum($a, $b);

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function subtract($a, $b);

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function multiply($a, $b);

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function divide($a, $b);
}