<?php

namespace TeoryAndPractic\Lesson_33\Get_Class_Methods;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_33\Get_Class_Methods
 */
class Test
{
    /**
     * @return bool
     */
    public function method_1()
    {
        return true;
    }


    /**
     * @return bool
     */
    public function method_2()
    {
        return true;
    }


    /**
     * @return bool
     */
    public function method_3()
    {
        return true;
    }
}
$test = get_class_methods(new Test);

echo '<pre>';
print_r($test);
echo '<br>';

foreach ($test as $el) {
    echo $el . '<br>';
}