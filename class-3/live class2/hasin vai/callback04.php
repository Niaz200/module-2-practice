<?php 

// // code1:

// $books = [
//     ["id" => 1, "title" => "Harry Potter 1", "author" => "J.K. Rowling"],
//     ["id" => 1, "title" => "Harry Potter 2", "author" => "J.K. Rowling"],
//     ["id" => 2, "title" => "Lord of the Rings", "author" => "J.R.R. Tolkien"],
//     ["id" => 3, "title" => "Catch-22", "author" => "Joseph Heller"],
//     ["id" => 4, "title" => "Imaginary", "author" => "AB"],
// ];

// function sortByAuthorName($book1, $book2){
//     // return strcmp($book1['author'], $book2['author']);
//     if(strlen($book1['author']) > strlen($book2['author'])){
//         return 1;
//     }elseif(strlen($book1['author']) < strlen($book2['author'])){
        
//         return -1;
//     }else{
//         return 0;
//     }
// }

// usort($books, "sortByAuthorName");
// print_r($books);



// // code2:

// $books = [
//     ["id" => 1, "title" => "Harry Potter 1", "author" => "J.K. Rowling"],
//     ["id" => 1, "title" => "Harry Potter 2", "author" => "J.K. Rowling"],
//     ["id" => 2, "title" => "Lord of the Rings", "author" => "J.R.R. Tolkien"],
//     ["id" => 3, "title" => "Catch-22", "author" => "Joseph Heller"],
//     ["id" => 4, "title" => "Imaginary", "author" => "AB"],
// ];

// function sortByAuthorName($book1, $book2){
//     // return strcmp($book1['author'], $book2['author']);
//     if(strlen($book1['author']) > strlen($book2['author'])){
//         return -1;
//     }elseif(strlen($book1['author']) < strlen($book2['author'])){
//         return 1;
//     }else{
//         return 0;
//     }
// }

// usort($books, "sortByAuthorName");
// print_r($books);



// // code3:

// $books = [6,4,10,7,2,5];

// function sortByAuthorName($book1, $book2){
//     // return strcmp($book1['author'], $book2['author']);
//     if($book1 > $book2){
//         return 1;
//     }elseif($book1 < $book2){
        
//         return -1;
//     }else{
//         return 0;
//     }
// }

// usort($books, "sortByAuthorName");
// print_r($books);


// // code4:

// $books = [6,4,10,7,2,5];

// function sortByAuthorName($book1, $book2){
//     // return strcmp($book1['author'], $book2['author']);
//     if($book1 > $book2){
//         return -1;
//     }elseif($book1 < $book2){
        
//         return 1;
//     }else{
//         return 0;
//     }
// }

// usort($books, "sortByAuthorName");
// print_r($books);


// // code5:

// $books = [6,4,10,5,7,2,5];

// function sortByAuthorName($book1, $book2){
//     // return strcmp($book1['author'], $book2['author']);
//     if($book1 > $book2){
//         return -1;
//     }elseif($book1 < $book2){
        
//         return 1;
//     }else{
//         return 0;
//     }
// }

// usort($books, "sortByAuthorName");
// print_r($books);


// // code6:

// $books = [6,4,10,5,7,2,5];

// function sortByAuthorName($book1, $book2){
//     // return strcmp($book1['author'], $book2['author']);
//     if($book1 < $book2){
//         return -1;
//     }elseif($book1 > $book2){
        
//         return 1;
//     }else{
//         return 0;
//     }
// }

// usort($books, "sortByAuthorName");
// print_r($books);





