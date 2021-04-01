<?php

namespace TeoryAndPractic\Lesson_49;

require_once "Trait1.php";

/**
 * Class Test1
 * @package TeoryAndPractic\Lesson_49
 */
class Test1
{
    /**
     * Trait1
     */
    use Trait1;


    /**
     * @return string
     */
    public function method()
    {
        return "Hello World!!!";
    }
}
$test1 = new Test1;
echo $test1->method();