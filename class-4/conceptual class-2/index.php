<?php

// // code1:
// // reference
//     function add_five(&$value){

//          $value += 5;

       
//     }

//     $num = 2;

//     add_five( $num);
//     echo $num ."\n";


//   // code2:
//   //recursion or recursive
// function display($number){

//     if( $number <= 5){
//         echo "$number \n";
//         display($number + 1);
//     }
// }
    
// display(1);

// code3:

// function callback($a){
//     return $a +5;
// }

// function sum($a, $b, $callback){

//     $callback($a);

//     return $a + $b;
// }

// echo sum(2,3, "callback");

// code3:
// callback function
function cb($string){
    return $string . '!';
}

function stringFormatter($string, $cb){
    echo $cb($string);
}

stringFormatter('hello', 'cb');



?>