<?php
include "../scr/functions.php";


//echo task1(['jdnkv', 'dvnjvm', 'vdvjd']);

//echo task2('/', null,5,3);

//echo task3(5, 7);

//Задание #4
date_default_timezone_set('Europe/Moscow');
echo date("d.m.Y H:i");
echo '<br>';
echo strtotime("24.02.2016 0:0:0");
echo '<br>';
echo date("d.m.Y H:i:s", 1456261200);
echo '<br>';

//Задание #5
$string = "Карл у Клары украл Кораллы";
echo str_replace('К', ' ', $string);
echo "<br>";

$string2 = "Две бутылки лимонада";
echo str_replace('Две', 'Три', $string2);
echo "<br>";

//Задание #6

$text = "Hello again!";
$fileOpen = fopen("test.txt", "w");
fwrite($fileOpen, $text);
fclose($fileOpen);

echo open_file("test.txt");





