<?php

namespace TeoryAndPractic\Lesson_33\Get_Class;

/**
 * Class Test2
 * @package TeoryAndPractic\Lesson_33\Get_Class
 */
class Test2 extends \TeoryAndPractic\Lesson_33\Get_Class\Test1
{
    /**
     * @var mixed
     */
    private $name;


    protected $tests2 = [];
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}
$test1 = new Test2;
$test2 = new Test2;
$test3 = new Test2;

$tests2 = array_unshift($test1,$test2,$test3);
$arr = array_merge_recursive($tests1, $tests2);

foreach ($arr as $el) {
    echo get_class($el) . '<br>';
}


