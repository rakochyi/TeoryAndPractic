<?php

namespace TeoryAndPractic\Lesson_50;

require_once "Trait1.php";

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_50
 */
class Test
{
    /**
     * Trait1
     */
    use Trait1;


    /**
     * @return int
     */
    public function method2()
    {
        return 2;
    }


    /**
     * @return float|int
     */
    public function getSum()
    {
        return $this->method2() * 100 * $this->method1();
    }
}
$test = new Test;
echo $test->getSum();