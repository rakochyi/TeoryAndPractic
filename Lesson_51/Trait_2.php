<?php

namespace TeoryAndPractic\Lesson_51;

require_once "Trait_1.php";

/**
 * Trait Trait_2
 * @package TeoryAndPractic\Lesson_51
 */
trait Trait_2
{
    /**
     * Trait_1
     */
    use Trait_1;


    /**
     * @return int
     */
    private function method_3()
    {
        return 3;
    }
}