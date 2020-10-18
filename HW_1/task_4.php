<?php
// Задание #4

$day = (int) $_GET['day'];

switch ($day) {
    case 0:
    default:
        echo "Неизвестный день";
        break;

    case ($day >= 1 && $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day == 6 || $day == 7):
        echo "Это выходной день";
        break;
}