<?php

namespace TeoryAndPractic\Lesson_33\Get_Class_Vars;

/**
 * Class Myclass
 * @package TeoryAndPractic\Lesson_33\Get_Class_Vars
 */
class Myclass
{
    /**
     * @var mixed
     */
    public $var1;

    /**
     * @var string
     */
    public $var2 = 'xyz';

    /**
     * @var int
     */
    public $var3 = 100;

    /**
     * @var mixed
     */
    private $var4;


}
$myclass = new Myclass;

$class_vars = get_class_vars(get_class(new Myclass));
foreach ($class_vars as $name => $value) {
    echo $name . ':' . $value . '<br>';
}