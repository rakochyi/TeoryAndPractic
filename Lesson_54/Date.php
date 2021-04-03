<?php

namespace TeoryAndPractic\Lesson_54;

/**
 * Class Date
 * @package TeoryAndPractic\Lesson_54
 */
class Date
{
    /**
     * @var mixed
     */
    public $year;

    /**
     * @var mixed
     */
    public $month;

    /**
     * @var mixed
     */
    public $day;


    /**
     * Date constructor.
     * @param $year
     * @param $month
     * @param $day
     */
    public function __construct($year, $month, $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }


    /**
     * @param $property
     */
    public function __get($property)
    {
        if ($property == 'weekDay') {
            $day = date('w', mktime(0,0,0,$this->month, $this->day, $this->year));
            $arr = [0 => 'Sunday', 1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday'];

            foreach ($arr as $key => $value){
                if ($key == $day) {
                    echo $value;
                }
            }
        }
    }

}
$date = new Date(2021, 04, 03);

echo $date->weekDay;