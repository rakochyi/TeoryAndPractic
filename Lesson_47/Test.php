<?php

namespace TeoryAndPractic\Lesson_47;

require_once "Trait1.php";
require_once "Trait2.php";

class Test
{
    use Trait1, Trait2 {
        Trait1::method insteadof Trait2;
        Trait1::method as method1;
        Trait2::method as method2;
    }


    public function __construct()
    {
        echo $this->method1() . $this->method2();
    }
}
new Test;