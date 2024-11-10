<?php

function fibonacciSeries( $numbers ) {
    $firstNumber = 0;
    $secNumber = 1;
    for ( $i = 1; $i <= $numbers; $i++ ) {
        $thirdNumber = $firstNumber + $secNumber;
        $firstNumber = $secNumber;
        $secNumber = $thirdNumber;
        echo "$thirdNumber \n";
    }
}
fibonacciSeries( 15 );
?>