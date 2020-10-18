<?php

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'Camry',
    'speed' => 120, 'doors' => 5,
    'year' => '2016'
];

$opel = ['model' => 'Vectra',
    'speed' => 100, 'doors' => 5,
    'year' => '2004'
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];


foreach($cars as $name => $car) {
    echo "CAR $name <br>";
    foreach ($car as $inf_key => $inf) {
        echo $inf . ' ';
    }
    echo "<br><br>";
}



