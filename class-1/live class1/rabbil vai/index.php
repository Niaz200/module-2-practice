<?php


// //built-in-function

// $x = "Hello World";

// $length = strlen($x);

// echo $length;



//user definefunction

// code1:

// function addTwoNum(){
//     $x=10;
//     $y=20;
//     echo $x+$y;
// }


// addTwoNum();



// code2:
// function addTwoNum($x,$y){
    
//     echo $x+$y;
// }


// addTwoNum(2,3);


// code3:

// function addTwoNum($a,$b,$c,$d=100){
    
//         echo $a+$b+$c+$d;
//     }
    
    
//     addTwoNum(1,2,3);


// code4:

// function addTwoNum($a,$b,$c,$d=100){
    
//     echo $a+$b+$c+$d;
// }


// addTwoNum(1,2,3,4);


// code5: parameter hinting

// function Myself(int $age, string$city){
    
//     echo "My Age is $age and city is $city";
// }


// Myself(30,"Dhaka");


// code6: parameter strict mode

// declare(strict_types=1);

// function Myself(int $age, string$city){
    
//     echo "My Age is $age and city is $city";
// }


// Myself("30","Dhaka");

//akhane 30 value string akare deya jabe na,int dite habe,jeheto strict mode enable koreci ar parameter a int bole diyesi .tai ekhane ans wrong asbe





// code7: parameter strict mode

// declare(strict_types=1);

// function Myself(int $age, string$city){
    
//     echo "My Age is $age and city is $city";
// }


// Myself(30,"Dhaka");


// code8: multiple parameter type strict mode

// declare(strict_types=1);

// function Myself(int|string $age, string$city){
    
//     echo "My Age is $age and city is $city";
// }


// Myself(30,"Dhaka");


// code9: multiple parameter type  strict mode 

// declare(strict_types=1);

// function Myself(int|string $age, string$city){
    
//     echo "My Age is $age and city is $city";
// }


// Myself("30","Dhaka");



// code10: parameter(params) type  null


// declare(strict_types=1);

// function myName(?string $text){
//     echo $text;
// }

// myName("ostad");

// myName(null);



// code11: parameter(params) type  null


// declare(strict_types=1);

// function myName(string|null $text){
//     echo $text;
// }

// myName("ostad");

// myName(null);



// code12: variadic function/ spread operator 

// function sum(...$numbers){

//     echo array_sum($numbers);
// }

// sum(1,2,3,4,5,6,7,8,9);


// code13: variadic function/ spread operator 

// function sum(...$numbers){

//     echo $numbers[4];
// }

// sum(10,20,30,40,50,60);


// code14: Raw Anonymous function


// (function(){
//     $x=10;
//     $y=20;
//     echo $x+$y;

// })();



// code15: Raw Anonymous function assign varibale


// $jack=function(){
//     $x=10;
//     $y=20;
//     echo $x+$y;

// };


// $jack();


// code15: Raw Anonymous function assign varibale


// $jack=function($x,$y){
  
//     echo $x+$y;

// };


// $jack(10,40);



// code16: Arrow function 


// $jack=fn($x,$y)=>$x+$y;

// $jack(10,40);


// code17: Arrow function 


// $jack=fn($x,$y)=>$x+$y;

// echo $jack(10,40);


// code18: function Return

// function avg($x,$y){
//     $res=($x+$y)/2;

//     return $res;
// }


// echo avg(12,13);  //this is equal 12.5


// code18: function Return

// function avg($x,$y){
//     $res=($x+$y)/2;

//     return $res;
// }


// echo avg(12,13)+10;



// code18: function Return type

// function avg($x,$y):float{
//     $res=($x+$y)/2;

//     return $res;
// }


// echo avg(12,13)+10;


// code19: function multiple(union) Return type

// function avg($x,$y):int|float{
//     $res=($x+$y)/2;

//     return $res;
// }


// echo avg(10,11)+10;


// code20: Return type of void

// function avg($x,$y):void{
//     $res=($x+$y)/2;

//     return $res;
// }


// echo avg(10,11)+10;


// code21: Nullable Return type

// function avg($x,$y):?int{
//     $res=($x+$y)/2;

//     return $res;
// }


// echo avg(10,12)+10;


// code22: Nullable Return type

// function avg($x,$y):int|null{
//     $res=($x+$y)/2;

//     return $res;
// }


// echo avg(10,12)+10;



// =====Loop======

// code1:

// for($i=0;$i<100;$i=$i+1){

//     echo "Video title<br/>";
// }


// code2:

// for($i=0;$i<100;$i=$i+1){

//     echo "$i Video title<br/>";
// }


// code3:

// for($i=0;$i<100;$i=$i+2){

//     echo "$i Video title<br/>";
// }

// code4: 

// for($i=0;$i<10;$i=$i+2){

//     echo "$i Video title<br/>";
// }


// code5: break loop

// for($i=0;$i<10;$i=$i+1){

//     echo "$i Video title<br/>";

//     if($i=6){
//         break;
//     }
// }


// code6: break loop

// for($i=0;$i<10;$i=$i+1){

//     echo "$i Video title<br/>";

//     if($i=6){
//         continue;
//     }
// }


// code7: for loop

// for($i=0;$i<10;$i=$i+1){

//     echo $i;

    
// }



// code8: while loop 

/*
$i = 0;

while($i<10){
    echo $i;
    $i=$i+1;
}

*/


// code9: do-while loop 

/*

$i=0;
do{
    echo $i;
    $i=$i+1;
}while($i<10);

*/

// code9: foreach loop 


/*

$colorList=array('red','green','blue','yellow');

foreach($colorList as $eachItem){
    echo "$eachItem <br/>";
}

*/

