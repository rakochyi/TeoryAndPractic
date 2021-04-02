<?php

namespace TeoryAndPractic\Lesson_51;

require_once "Trait_2.php";

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_51
 */
class Test
{
    /**
     * Trait_2
     */
    use Trait_2;


    /**
     * Test constructor.
     */
    public function __construct()
    {
        echo $this->method_1() + $this->method_2() + $this->method_3();
    }
}
new Test;