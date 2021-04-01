<?php

namespace TeoryAndPractic\Lesson_47\Pr_less;

require_once "Trait1.php";
require_once "Trait2.php";
require_once "Trait3.php";

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_47\Pr_less
 */
class Test
{
    /**
     * Trait1, Trait2, Trait3
     */
    use Trait1, Trait2, Trait3 {
        Trait1::method insteadof Trait2;
        Trait2::method insteadof Trait3;
        Trait1::method as method_1;
        Trait2::method as method_2;
        Trait3::method as method_3;
    }


    /**
     * @return int
     */
    public function getSum()
    {
        return $this->method_1() + $this->method_2() + $this->method_3();
    }
}
$test = new Test;
echo $test->getSum();