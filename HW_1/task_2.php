<?php

// Задание #2
const PICTURE = 80;
const FELT_PEN = 23;
const PENCIL = 40;
$paint_img = PICTURE - (FELT_PEN + PENCIL);

//echo "На школьной выставке " . PICTURE . " рисунков. " . FELT_PEN . " из них выполнены фломастерами, " . PENCIL . " карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?";
echo "<br>" . $paint_img . " рисунков, выполненные красками.";
