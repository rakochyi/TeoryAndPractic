<?php

namespace TeoryAndPractic\Lesson_45\Interface_exists;

require_once "iTest1.php";



/**
 * Class Test1
 * @package TeoryAndPractic\Lesson_45\Interface_exists
 */
class Test1 implements iTest1
{
    /**
     * @var string
     */
    private $name;


    /**
     * Test1 constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
$test1 = new Test1('Bogdan');
echo $test1->getName();
echo '<br>';
echo interface_exists('iTest1');


