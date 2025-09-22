<?php

// Array :-> PHP

// Types of arryas:
//         1) Indexed Array
//         2) Assocoative Arrays
//         3) MultiDimensional Array



// 1) Indexed Array:------->

// $arr = ["Hey", "Hello", "Ok", "Done"];

// print_r($arr);


// $x = array("nooo", "hloo", "ok");

// print_r($x);

// echo"<br>";

// var_dump($x);

// echo"<br>";

// var_export($x);


//  $x = array("nooo", "hloo", "ok");
//  //array---> json

//  echo json_encode($x);


//  $x = array("hello","noo","okkk","nice");
// // //print_r($x);
// // echo $x[2];



// for($i = 0; $i<count($x); $i++){
//     echo $x[$i]."<br>";
// }



//   Array function-------------->


// 1) count()----> count number of element in array

// $zx = array(23, 45,35,23,56);
// echo count($zx);


// 2) array_push() ----->adding a new element at end of the array:

// $arr = [23,64,75,24,66,15,7,48];
// array_push($arr,100);
// array_push($arr,200);
// array_push($arr,300,400,500);
// print_r($arr);



// create a empty array and push 1 to 10 in that array using for loop.
// $arr = [];
// for ($i = 1; $i <= 10; $i++) {
//     array_push($arr, $i);
// }
// print_r($arr);
// echo "<br>";
// echo json_encode($arr);





// 3) array_pop() ----->delete a  element at end of the array:

// $a = array(23, 64, 75, 24, 66, 15, 7, 48);

// array_pop($a);
// array_pop($a);
// print_r($a);



// // 4) array_unshift() ----->add a new element at starting of the array:

//  $a = array(23, 64, 75, 24, 66, 15, 7, 48);
//  array_unshift($a,10);
//  array_unshift($a,20,30);
//  print_r($a);


// 5) array_shift() ----->delete a  element at starting of the array:

//  $a = array(23, 64, 75, 24, 66, 15, 7, 48);
//  array_shift($a);
//  print_r($a);


// // 6) sort($zx); ---> to assending order

// $a = array(23, 64, 75, 24, 66, 15, 7, 48);
//  sort($a);
//  print_r($a);


// 7) rsort($zx); ---> to decending order

// $a = array(23, 64, 75, 24, 66, 15, 7, 48);
//  rsort($a);
//  print_r($a);


// 8) array_reverse()-------> reverse the array

// $zx = array(12, 45, 6, 7, 8, 45, 23);
// $yz = array_reverse($zx); // it create new array, orginal array remains same
// print_r($yz);



// 9) in_array()-----> find the element in array and return true and false.

 //$zx = array(12, 45, 6, 7, 8, 45, 23);
// echo in_array(6,$zx);


// if(in_array(666,$zx)){
//     echo "exist";
// }else{
//     echo "not exists";
// }



// 10) array_search()-----> find the element in array and return index number.

// $zx = array(12, 45, 6, 7, 8, 45, 23);
// echo array_search(6,$zx);


// 11) array_merge()----> merge the array

// $zx = array(12, 45, 6, 7, 8, 45, 23);
// $yz = array(1,2,3,4);
// $zz = array(1,2,3,4);
// $x = array_merge($yz,$zx,$zz); 
// print_r($x);


// 12) implode()----> convert array to string

// $zx = array(12, 45, 6, 7, 8, 45, 23);
// echo implode(" ",$zx);

// $zx = array("hello","hyyy","okkk");
// echo implode(" ",$zx);


// 13) expload()----> convert string to array
// $x = "how are you";
// $y =  explode(" ",$x);
// print_r($y);


// 14) array_unique()----> remove the duplicate value

// $arr = [1,23,1,67,23,7,7,7,29];
// print_r(array_unique($arr));


// 15) array_sum()------> sum of the element in array

// $arr = [1,23,1,67,23,7,7,7,29];
// print_r(array_sum($arr));


// 16) array_product()------> multiply of the element in array

// $arr = [1,23,1,67,23,7,7,7,29];
// print_r(array_product($arr));



// 17) shuffle()-----> shuffle the element in array

// $zx = array(12, 45, 6, 7, 8, 45, 23);
// shuffle($zx);
// print_r($zx);


// 18) range()-----> create an array from given range
// $x = range(1, 21);

// print_r ($x);



// 19) array_slice(array,start,length)--------> return selected part of array

// $zx = [12, 34, 45, 56, 67, 78, 89, 100];
// print_r(array_slice($zx,2,4));



// 20) array_splice(array, start, length, array)--------> Remove elements from an array and replace it with new elements

// $zx =[12, 34, 45, 56, 67, 78, 89, 100,35];
// array_splice($zx,3,2);
// print_r($zx);

$zx =[12, 34, 45, 56, 67, 78, 89, 100,35];
array_splice($zx,3,1,[1,2,3]);
print_r($zx);














