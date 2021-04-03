<?php

namespace TeoryAndPractic\PRACTIC;

use TeoryAndPractic\Lesson_28\Collection\EmployeeCollection;

/**
 * Class Date
 * @package TeoryAndPractic\PRACTIC\Class_Date_56
 */
class Class_Date_56
{
    /**
     * @var integer
     */
    private $day;

    /**
     * @var integer
     */
    private $month;

    /**
     * @var integer
     */
    private $year;



    /**
     * Date constructor.
     * @param $day
     * @param $month
     * @param $year
     */
    public function __construct($day, $month, $year)
    {
            $this -> day = $day;
            $this -> month = $month;
            $this -> year = $year;
    }


    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this -> day;
    }


    /**
     * @param $lang
     * @return mixed
     */
    public function getMonth($lang)
    {
        if ($lang == 'ua') {
            $month_ua = date('m', mktime(0, 0, 0, $this -> month, $this -> day, $this -> year));
            $arr_ua = [0 => '', 1 => 'Січня', 2 => 'Лютого', 3 => 'Березня', 4 => 'Квітня', 5 => 'Травня', 6 => 'Червня', 7 => 'Липня', 8 => 'Серпня', 9 => 'Вересня', 10 => 'Жовтня', 11 => 'Листопада', 12 => 'Грудня'];

            foreach ($arr_ua as $key => $value) {
                if ($this->month == $key) {
                    return $value;
                }
            }
        }


        if ($lang == 'en') {
            $month_en = date('m', mktime(0, 0, 0, $this -> month, $this -> day, $this -> year));
            $arr_en = [0 => '', 1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'Jule', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'];

            foreach ($arr_en as $key => $value) {
                if ($this->month == $key) {
                    return $value;
                }
            }
        }

    }


    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this -> year;
    }


    /**
     * @param $language
     * @return string
     */
    public function getWeekDay($language)
    {
        if($language == 'en') {
            $this->day = $day_en;
            $day_en = date('w', mktime(0,0,0,$this->month, $this->day, $this->year));
            $arr_en = [0 => 'Monday', 1 => 'Tuesday', 2 => 'Wednesday', 3 => 'Thursday', 4 => 'Friday', 5 => 'Saturday', 6 => 'Sunday'];

            foreach ($arr_en as $key => $value){
                if ($day_en == $key) {
                    return $value;
                }
            }
        }



        if($language == 'ua') {
            $this->day = $day_ua;
            $day_ua = date('w', mktime(0,0,0,$this->month, $this->day, $this->year));
            $arr_ua = [0 => 'Понеділок', 1 => 'Вівторок', 2 => 'Середа', 3 => 'Четвер', 4 => 'П`ятниця', 5 => 'Субота', 6 => 'Неділя'];

            foreach ($arr_ua as $key => $value){
                if ($day_ua == $key) {
                    return $value;
                }
            }
        }
    }


    /**
     * @param $value
     * @return int
     */
    public function addDay($value)
    {
        $sum = $this->day + $value;
        return $sum;
    }


    /**
     * @param $value
     * @return int
     */
    public function subDay($value)
    {
        $sub = $this->day - $value;
        return $sub;
    }


    /**
     * @param $value
     * @return int
     */
    public function addMonth($value)
    {
        $sum = $this->month + $value;
        return $sum;
    }


    /**
     * @param $value
     * @return int
     */
    public function subMonth($value)
    {
        $sub = $this->month - $value;
        return $sub;
    }


    /**
     * @param $value
     * @return int
     */
    public function addYear($value)
    {
        $sum = $this->year + $value;
        return $sum;
    }


    /**
     * @param $value
     * @return int
     */
    public function subYear($value)
    {
        $sub = $this->year - $value;
        return $sub;
    }


    /**
     * @param $format
     * @return false|string
     */
    public function format($format)
    {
        $format = "$this->day - $this->month - $this->year";
        $date = date('d - m - Y', mktime(0, 0, 0, $this->month, $this->day, $this->year));
        return $date;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->year . '-' . $this->month . '-' . $this->day;
    }
}
$date = new Class_Date_56(3, 4, 2021);
echo $date->getDay() . ' - ' . $date->getMonth('ua') . ' - ' . $date->getYear() . ' - ' .$date->getWeekDay('ua');
echo '<br>';
echo (new Class_Date_56(15, 03, 1992))->addDay(4);
echo '<br>';
echo (new Class_Date_56(5, 4, 2021))->subDay(4);
echo '<br>';
echo (new Class_Date_56('5', 7, 2020))->addMonth(3);
echo '<br>';
echo (new Class_Date_56('5', 7, 2020))->subMonth(3);
echo '<br>';
echo (new Class_Date_56('5', 7, 2020))->addYear(3);
echo '<br>';
echo (new Class_Date_56('5', 7, 2020))->subYear(3);
echo '<br>';
echo (new Class_Date_56(5, 7, 2020))->format('d - m - y');
echo '<br>';
echo (new Class_Date_56(5, 7, 2020));