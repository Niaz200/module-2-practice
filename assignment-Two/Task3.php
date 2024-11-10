<?php

$firstNumber = 0;
$secNumber = 1;

for($i = 1; $i<=10; $i++){
    $thirdNumber = $firstNumber + $secNumber; // next number 
    $firstNumber = $secNumber;
    $secNumber = $thirdNumber;
    if($thirdNumber>100){
        break;
    }
    echo "$thirdNumber \n";
}

?>