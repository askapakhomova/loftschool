<?php

$bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => '2015'];
$toyota = ['model' => 'Camry', 'speed' => 120, 'doors' => 5, 'year' => '2016'];
$opel = ['model' => 'Vectra', 'speed' => 100, 'doors' => 5, 'year' => '2004'];
$car = [
    $bmw,
    $toyota,
    $opel,
];


foreach($car as $base_key => $base_value) {
    foreach($base_value as $key => $value) {
        echo $value, ' ';
    }
    echo "<br>";
}



