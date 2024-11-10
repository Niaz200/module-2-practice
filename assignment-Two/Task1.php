<?php

//function using for loop
function EvenNumbersForLoop( $start, $end, $step ) { //for loop function
    for ( $i = $start; $i <= $end; $i += $step ) { //for loop
        if ( $i % 2 === 0 ) {
            echo "$i \n";
        }
    }
}
EvenNumbersForLoop( 1, 20, 1 ); //function calling

echo "\n";

//step2:

//using while loop
function EvenNumbersWhileLoop($start, $end, $step) {
    $i = $start +1;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}


EvenNumbersWhileLoop(1, 20, 2);


//using do-while loop

function EvenNumbersDoWhileLoop($start, $end, $step) {
    $i = $start + 1;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}


EvenNumbersDoWhileLoop(1, 20, 2);


?>