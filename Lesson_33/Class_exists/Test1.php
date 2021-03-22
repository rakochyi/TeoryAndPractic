<?php

namespace TeoryAndPractic\Lesson_33\Class_exists;

/**
 * Class Test1
 * @package TeoryAndPractic\Lesson_33\Class_exists
 */
class Test1
{
    /**
     * @var mixed
     */
    private $a;

    /**
     * @var mixed
     */
    private $b;


    /**
     * Test1 constructor.
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
}
if(class_exists('Test1')) {
    $test1 = new Test1;
}

if (isset($_GET['Test1'])) {
    echo 'Yes';
}