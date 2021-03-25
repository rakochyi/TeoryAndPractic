<?php

namespace TeoryAndPractic\Lesson_33\Is_A;

/**
 * Class ChildClass
 * @package TeoryAndPractic\Lesson_33\Is_A
 */
class ChildClass extends ParentClass
{
    /**
     * @var string
     */
    protected $text = 'yomayo';
}
$obj = new ChildClass;

if (is_a($obj, 'ChildClass')) {
    echo 'Yes $obj is ChildClass';
} else {
    echo 'No $obj is not ChildClass';
}


if (is_a($obj, 'ParentClass')) {
    echo 'Yes $obj is ParentClass';
} else {
    echo 'No $obj is not ParentClass';
}


