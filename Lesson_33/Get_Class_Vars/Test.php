<?php

namespace TeoryAndPractic\Lesson_33\Get_Class_Vars;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_33\Get_Class_Vars
 */
class Test
{
    /**
     * @var mixed
     */
    public $prop1;

    /**
     * @var mixed
     */
    public $prop2;

    /**
     * @var mixed
     */
    private $prop3;

    /**
     * @var mixed
     */
    private $prop4;


    /**
     * Test constructor.
     */
    public function __construct()
    {
        return get_class_vars(get_class($this));
    }
}
$test = new Test;
$test = get_class_vars(get_class(new Test));
foreach ($test as $name => $value) {
    echo $name . ':' . $value . '<br>';
}