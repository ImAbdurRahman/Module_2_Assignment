<?php
function calculateAndPrintFibonacci() {
    $num1 = 0;
    $num2 = 1;
    
    for ($i = 1; $i <= 10; $i++) {
        $fibonacci = $num1 + $num2;
        if ($fibonacci > 100) {
            break;
        }
        
        echo $fibonacci . " ";
        $num1 = $num2;
        $num2 = $fibonacci;
    }
}

echo "First 10 Fibonacci numbers (up to 100): ";
calculateAndPrintFibonacci();
?>
