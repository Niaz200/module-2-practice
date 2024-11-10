<?php

// // code1:

// $numbers = [1,2,3,4,5,6,7,8,9,10];


// function isEven($n){

//     if($n % 2 == 0){
//         return true;
//     }
//     return false;
    
    
// }



// // code2:

// $numbers = [1,2,3,4,5,6,7,8,9,10];


// function isEven($n){

//     // if($n % 2 == 0){
//     //     return true;
//     // }
//     // return false;

//     return $n % 2 == 0;
    
    
// }




// // code3:

// $numbers = [1,2,3,4,5,6,7,8,9,10];


// function isEven($n){

//     return $n % 2 == 0;
    
    
// }




// // code4:

// $numbers = [1,2,3,4,5,6,7,8,9,10];


// function isEven($n){

//     return $n % 2 == 0;
    
    
// }

// $evennumbers = array_filter($numbers, "isEven");

// print_r($evennumbers);



// // code5:

// $numbers = [1,2,3,4,5,6,7,8,9,10];


// function isEven($n){

//     if($n % 2 == 0){
//         return true;
//     }
//     return false;

    
    
    
// }

// $evennumbers = array_filter($numbers, "isEven");

// print_r($evennumbers);


// code6:

$numbers = [1,2,3,4,5,6,7,8,9,10];


function isEven($n){

    // if($n % 2 == 0){
    //     return true;
    // }
    // return false;

    return $n % 2 == 0;
    
    
}

$evennumbers = array_filter($numbers, "isEven");

print_r($evennumbers);



?>
