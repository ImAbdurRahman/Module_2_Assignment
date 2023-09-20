<?php
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
    }
    echo "\n";
}

function printEvenNumbersWhile($start, $end, $step) {
    $current = $start;
    while ($current <= $end) {
        if ($current % 2 === 0) {
            echo $current . " ";
        }
        $current += $step;
    }
    echo "\n";
}

function printEvenNumbersDoWhile($start, $end, $step) {
    $current = $start;
    do {
        if ($current % 2 === 0) {
            echo $current . " ";
        }
        $current += $step;
    } while ($current <= $end);
    echo "\n";
}


$start = 1;
$end = 20;
$step = 2;

echo "Using for loop: ";
printEvenNumbersFor($start, $end, $step);

echo "Using while loop: ";
printEvenNumbersWhile($start, $end, $step);

echo "Using do-while loop: ";
printEvenNumbersDoWhile($start, $end, $step);
?>
