<?php

namespace TeoryAndPractic\Lesson_11\Cities;

require_once 'City.php';

$cities = [
    new City('Ternopil', 200000),
    new City('Plock', 150000),
    new City('Berlin', 3000000),
    new City('Lviv', 1200000)
];

foreach ($cities as $city) {
    echo $city->name . ' - ' . $city->population . '<br>';
}