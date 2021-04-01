<?php

namespace TeoryAndPractic\Lesson_48;

require_once "Trait2.php";

/**
 * Class Test2
 * @package TeoryAndPractic\Lesson_48
 */
class Test2
{
    /**
     * Trait2
     */
    use Trait2 {
        Trait2::method as public;
    }


    /**
     * Test2 constructor.
     */
    public function __construct()
    {
        echo $this->method();
    }
}
new Test2;