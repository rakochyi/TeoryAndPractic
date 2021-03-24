<?php

namespace TeoryAndPractic\Lesson_33\Method_exists;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_33\Method_exists
 */
class Test
{
    /**
     * @return string
     */
    public function method1()
    {
        return 'Hello';
    }
}
$test = new Test;

var_dump(method_exists($test, 'method1'));
echo '<br>';
var_dump(method_exists($test, 'method2'));
echo '<br>';

if (isset($_GET['Test'])) {
    if (method_exists($test, 'method1')){
        $test = new Test;
        echo $test->method1();
    }
}