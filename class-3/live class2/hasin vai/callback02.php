<?php
//filter people by gender

// // code1:

// $people = [
//     ['name'=>'A','gender'=>'M'],
//     ['name'=>'B','gender'=>'M'],
//     ['name'=>'C','gender'=>'F'],
//     ['name'=>'D','gender'=>'F'],
//     ['name'=>'E','gender'=>'M'],
// ];

// function isMale($person){
//     if($person['gender']=='M'){
//         return true;
//     }
//     return false;
// }

// function isFemale($person){
//     if($person['gender']=='F'){
//         return true;
//     }
//     return false;
// }

// $males = array_filter($people, "isMale");
// print_r($males);



// // code2:

// $people = [
//     ['name'=>'A','gender'=>'M'],
//     ['name'=>'B','gender'=>'M'],
//     ['name'=>'C','gender'=>'F'],
//     ['name'=>'D','gender'=>'F'],
//     ['name'=>'E','gender'=>'M'],
// ];

// function isMale($person){
//     if($person['gender']=='M'){
//         return true;
//     }
//     return false;
// }

// function isFemale($person){
//     if($person['gender']=='F'){
//         return true;
//     }
//     return false;
// }

// $females = array_filter($people, "isFemale");
// print_r($females);


// code3:

$people = [
    ['name'=>'A','gender'=>'M'],
    ['name'=>'B','gender'=>'M'],
    ['name'=>'C','gender'=>'F'],
    ['name'=>'D','gender'=>'F'],
    ['name'=>'E','gender'=>'M'],
];

function isMale($person){
    if($person['gender']=='M'){
        return true;
    }
    return false;
}

function isFemale($person){
    if($person['gender']=='F'){
        return true;
    }
    return false;
}

$males = array_filter($people, "isMale");
print_r($males);

$females = array_filter($people, "isFemale");
print_r($females);


?>