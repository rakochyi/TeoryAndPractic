<?php

namespace TeoryAndPractic\Lesson_11;

require_once 'User.php';

$users = [
    new User('Bogdan', 29),
    new User('Julia', 28),
    new User('Stanislav', 4),
    new User('Juriy', 1)
];

foreach ($users as $user) {
    echo $user->name . ' - ' . $user->age . '<br>';
}