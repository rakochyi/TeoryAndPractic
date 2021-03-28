<?php

namespace TeoryAndPractic\Lesson_39;

require_once "iCube.php";

/**
 * Class Cube
 * @package TeoryAndPractic\Lesson_39
 */
class Cube implements iCube
{
    /**
     * @var mixed
     */
    private $a;


    /**
     * Cube constructor.
     * @param $a
     */
    public function __construct($a)
    {
        $this->a = $a;
    }


    /**
     * @return float|int|mixed
     */
    public function getSquareCube()
    {
        return 6 * pow($this->a, 2);
    }


    /**
     * @return float|int|mixed
     */
    public function getVolumeCube()
    {
        return pow($this->a, 3);
    }
}
$cube = new Cube(3);

echo $cube->getSquareCube() . ' - square cube <br>';
echo $cube->getVolumeCube() . ' - volume cube';