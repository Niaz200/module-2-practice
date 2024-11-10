<?php

// //task1:

// for ($i=1; $i <= 10 ; $i++) { 
//     if($i % 2 == 0){
//         echo "The Even number is:" . "$i \n";
//     }
// }


// task2:

// function greet($name){
//         echo "Hello MD. $name";
//     }

// greet("Abu Bakar Siddique(Niaz)");


// //task3:

// function factorial($n){
//     if($n == 0){
//         return 1;
//     }
//     return $n * factorial($n - 1);
// }


// $result = factorial(5);
// echo $result;


//task4:

$firstNumber = 0;
$secondNumber = 1;
echo "$firstNumber\n";
echo "$secondNumber\n";

for($i=0; $i<=7; $i++){
     $third = $firstNumber + $secondNumber;
     $firstNumber = $secondNumber;
     $secondNumber = $third;
    echo "$third\n";
}


// //task4:

// $firstNumber = 0;
// $secondNumber = 1;
// echo "$firstNumber\n";
// for($i=0; $i<=8; $i++){
//      $third = $firstNumber + $secondNumber;
//      $secondNumber = $firstNumber;
//      $firstNumber = $third;
//     echo "$third\n";
// }



 ?>