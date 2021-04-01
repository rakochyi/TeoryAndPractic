<?php

namespace TeoryAndPractic\Lesson_48;

require_once "Trait1.php";

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_48
 */
class Test
{
    /**
     * Trait1
     */
    use Trait1;


    /**
     * Test constructor.
     */
    public function __construct()
    {
        echo $this->method();
    }
}
new Test;