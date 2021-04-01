<?php

namespace TeoryAndPractic\Lesson_50;

/**
 * Trait Trait1
 * @package TeoryAndPractic\Lesson_50
 */
trait Trait1
{
    /**
     * @return int
     */
    public function method1()
    {
        return 1;
    }


    /**
     * @return mixed
     */
    abstract public function method2();
}