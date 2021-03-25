<?php

namespace TeoryAndPractic\Lesson_33\Is_A;

/**
 * Class ParentClass
 * @package TeoryAndPractic\Lesson_33\Is_A
 */
class ParentClass
{
    /**
     * @var int
     */
    protected $number = 1;
}
echo '<pre>';
print_r(get_declared_classes());