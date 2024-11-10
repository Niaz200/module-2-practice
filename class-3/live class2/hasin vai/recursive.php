<?php

// function countdown($n){
//     for($i = $n; $i > 0; $i--){
//         echo "$i \n";
//     }
// }

// countdown(5);


//what is recursion?

// // code1:

// function recursiveCountdown($n){
//     if($n == 0){
//         return;
//     }

//     echo $n."\n";

//     recursiveCountdown($n - 1);
// }


// recursiveCountdown(5);

// // code2:
// //factorial for recursion

// function factorial($n){
//     if($n == 0){
//         return 1;
//     }
//     return $n * factorial($n - 1);
//     //5*4*3*2*1*1
// }

// $result = factorial(5);
// echo $result;


// code3:
//nonrecursive

function nonRecursiveFactorial($n){
    $result = 1;

    for($i = $n; $i > 0; $i--){
        $result *= $i;
    }
    return $result;
}

$result = nonRecursiveFactorial(5);
echo $result;

?>