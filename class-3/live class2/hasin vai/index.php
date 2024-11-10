<?php

// Variable scope

// Global Scope

// // code1:

// $name = "john Doe"; //global scope

// function greet(){
//     echo "Hello";
// }

// greet();


// // code2:

// $name = "john Doe"; //global scope

// function greet(){
//     echo "Hello" . $name;
// }

// greet();

// // code3:

// $name = "john Doe"; //global scope

// function greet(){

//     global $name;
//     echo "Hello" . $name;
// }

// greet();



// Local Scope

// code4:



// function greet(){

//     $title = "Mr."; //Local scope
    
//     echo "Hello" . $title;
// }

// greet();


// // code5:
// //satatic scope


// function increment(){

//     static $counter = 0;
//     $counter++;
    
//     echo $counter . "\n";
// }

// increment();
// increment();
// increment();


// code6:

// //Argument,function defination

// function greet($name, $greetings){  //function defination
//     echo $greetings . "," . $name . "!";
// }

// greet("john", "Hi"); //Argument



// // code7:

// //Argument,function defination

// function greet($name, $greetings){  //function defination
//     echo $greetings . "," . $name . "!";
// }

// $name = "Jone";
// greet($name, "Hi"); //Argument


// // code8:

// //Default parameter

// function greet($name, $greetings = "hi"){  
//     echo $greetings . "," . $name . "!";
// }

// $name = "Jone";
// greet($name); 


// // code9:

// //Default parameter

// function greet($name, $greetings = "hi"){  
//     echo $greetings . "," . $name . "!";
// }

// $name = "Jone";
// greet($name, "hello"); 

// // code10:


// $name = "John Doe";

// function change($name){
//     $name = "New Name";
// }

// change($name); //by value
// echo $name;



// // code11:


// $name = "John Doe";

// function change(&$name){
//     $name = "New Name";
// }

// // change($name); //by value

// change($name); //by reference
// echo $name;

 // code11a:
 //by reference
 
  // function add_five(&$value){

  //       $value += 5;

       
 //   }

 //   $num = 2;

 //   add_five( $num);
 //   echo $num ."\n";
 

// // code12:

// //call back function

// function add($x1, $x2){
//     echo "Adding $x1 and $x2";
// }

// function process($n1, $n2, $cb){
//     $cb($n1, $n2);
// }

// process(10, 20, "add");

// // code13:

// //call back function

// function divide($x1, $x2){
//     echo "Dividing $x1 and $x2";
// }

// function process($n1, $n2, $cb){
//     $cb($n1, $n2);
// }

// process(10, 20, "divide");


// // code14:

// // //call back function

// function divide($x1, $x2){
//     echo "Dividing $x1 and $x2";
// }

// function process($n1, $n2, $cb){

//     if(is_callable($cb)){
//         $cb($n1, $n2);

//     }else{
//         echo "Sorry, $cb is not callable";
//     }
    
// }

// process(10, 20, "divide");



// code15:

// //call back function

function divide($x1, $x2){
    echo "Dividing $x1 and $x2";
}

function process($n1, $n2, $cb){

    if(is_callable($cb)){
        $cb($n1, $n2);

    }else{
        echo "Sorry, $cb is not callable";
    }
    
}

process(10, 20, "multiply");



?>