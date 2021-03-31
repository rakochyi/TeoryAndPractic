<?php

namespace TeoryAndPractic\Lesson_44;

require_once "iSphere.php";

/**
 * Class Sphere
 * @package TeoryAndPractic\Lesson_44
 */
class Sphere implements iSphere
{
    /**
     * @var integer|string
     */
    private $radius;


    /**
     * Sphere constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }


    /**
     * @return float|int|mixed
     */
    public function getVolume()
    {
        return (4/3) * self::PI * pow($this->radius, 3);
    }


    /**
     * @return float|int|mixed
     */
    public function getSquare()
    {
        return 4 * self::PI * pow($this->radius, 2);
    }
}
$sphere = new Sphere(10);
echo $sphere->getVolume() . ' - volume <br>';
echo $sphere->getSquare() . ' - square';