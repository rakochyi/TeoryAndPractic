<?php

namespace TeoryAndPractic\Lesson_33\Property_exists;

/**
 * Class Test1
 * @package TeoryAndPractic\Lesson_33\Property_exists
 */
class Test1 extends Test
{

    /**
     * @var mixed
     */
    private $prop1 = 1;


    /**
     * @var mixed
     */
    public $prop2 = 2;
}
var_dump(property_exists(new Test1, 'prop1'));
echo '<br>';
var_dump(property_exists(new Test1,'prop2'));
echo '<br>';
var_dump(property_exists(new Test1,'prop3'));

$elements = [$mine, $age, $test, $prop1, $prop2];
foreach ($elements as $elem) {
    $var_true = var_dump(property_exists(new Test1, '$elem'));
    if ($var_true == true) {
        echo $elem . '<br>';
    }
}
