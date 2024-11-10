<?php

// array map

// // code1:

// $numbers = [1,2,3,4,5];

// function square($n){
//     return $n * $n;
// }

// function cube($n){
//     return $n * $n *$n;
// }


// $cubes = array_map("cube", $numbers);
// print_r($cubes);


// //code2:

// // array map

// $numbers = [1,2,3,4,5];

// function square($n){
//     return $n * $n;
// }

// function cube($n){
//     return $n * $n *$n;
// }


// $squares = array_map("square", $numbers);
// print_r($squares);




//code3:

// array map

$numbers = [1,2,3,4,5];

function square($n){
    return $n * $n;
}

function cube($n){
    return $n * $n *$n;
}


$cubes = array_map("cube", $numbers);
$squares = array_map("square", $numbers);
print_r($cubes);
print_r($squares);

?>