<?php
function task1(array $str, bool $return = false)
{
    if($return == true) {
        foreach ($str as $string) {
            $result .= $string;
            echo $result;
        }
    } else {
        foreach ($str as $string) {
            echo "<p> $string </p>";
        }
    }
}

function task2(string $operation, ...$arguments)
{
    foreach ($arguments as $argument) {
        if (!is_integer($argument) && !is_float($argument)) {
            trigger_error('the type of argument is wrong');
            return 'ERROR: wrong type';
        }
    }
    switch ($operation) {
        case '+':
            return array_sum($arguments);
        case '-':
            return array_shift($arguments) - array_sum($arguments);
        case '/':
            $result = array_shift($arguments);
            foreach ($arguments as $argument) {
                if ($argument == 0) {
                    return 'ERROR: cannot be divided by 0';
                }
                $result /= $argument;
            }
            return $result;
        case '*':
            foreach ($arguments as $argument) {
                $result *= $argument;
            }
            return $result;

        default:
            echo 'ERROR: unknown operation';
    }
}

function task3(int $param1, int $param2) {
    if ($param1 <= 0 || $param2 <= 0) {
        trigger_error('parametrs must be positiv and not be equal 0');
        return false;
    }
    $result = "<table border='1'>";
    for ($row=1; $row < $param1; $row++) {
        $result .= '<tr>';
        for ($col=1; $col < $param2; $col++) {
            $result .= '<td>';
            $result .=  $row * $col;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}


function open_file(string $fileName)
{
    $fp = fopen($fileName, "r");
    while (!feof($fp)) {
        $file = fgets($fp, 1024);
    }
    var_dump($file);
}