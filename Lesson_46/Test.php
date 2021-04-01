<?php

namespace TeoryAndPractic\Lesson_46;

require_once "Trait1.php";
require_once "Trait2.php";
require_once "Trait3.php";


/**
 * Class Test
 * @package TeoryAndPractic\Lesson_46
 */
class Test
{
    /**
     * Trait1
     * Trait2
     * Trait3
     */
    use Trait1, Trait2, Trait3;


    /**
     * @return int
     */
    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}
$test = new Test;
echo $test->getSum();