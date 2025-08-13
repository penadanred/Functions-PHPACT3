<?php
function sum ($a, $b):mixed {
    return $a + $b;

}

echo sum (a: 5, b: 3);
$str = "hello, websys";
echo strlen ($str);


function calculate ($a, $b, $command):mixed{
    switch ($command){
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'division':
            return $a / $b;
        default :
            return "invalid operation";
    }
}


echo calculate (a: 10, b: 5, command: 'add');
echo "\n";

echo calculate (a: 20, b: 10,command: 'subtract');
echo "\n";


echo calculate (a: 5, b: 2, command: 'multiply');
echo "\n";

echo calculate (a: 7, b: 2, command: 'division');
echo "\n";
?>