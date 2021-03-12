<?php

namespace TeoryAndPractic\Lesson_1;

/**
 * Class LessOne
 * @package TeoryAndPractic\Lesson_1
 */
class LessOne
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var int
     */
    public $fuel;


    public function go()
    {
        // TODO
    }

    public function turn()
    {
        //TODO
    }

    public function stop()
    {
        //TODO
    }

}

$myLess = new LessOne;

$myLess->color = 'red';
$myLess->fuel = 50;

$myLess->go();
$myLess->turn();
$myLess->stop();
