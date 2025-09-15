<?php
//data types-----> what types of data we deal in entire php.

// there are 8 types of data-types in php.

// 1) string:

// $x = "hellow";

// $y = "heyyy";

// $z="100";




// 2) Integer:

// 1, 3, -100, 334546


//  $x = 100;


// 3) float / double:

// 1.0, 32.56, 10.2

// $x = 10.365;




// 4)  Boolean:

// true, false | 0, 1 | yes, no

//$x = true;




// 5) Array:

// $xy = array(12, 13, 14, 15, 16);



// 6) Object: ---> OOPs


// 7) Null:

// $x = null;

// 8) resource:

//  The special resource type is not an actual data type. 
//  It is the storing of a reference to functions and resources external to PHP.

//  A common example of using the resource data type is a database call.


//--------------------------------------------------------------------------------------------------------------------




// To check data type of any variable:

// var_dump()



// $x = array(12, 43, 44,54);
//  var_dump($x);

// $x = " deepak";
//  var_dump($x);

//  $x = " 100 ";
//  var_dump($x);




//-----------------------------------------------------------------------

//Type Casting | type conversion

//syntax for type casting-------->

// $new-var = (type)$old_data;

// $x = "809889";
// var_dump($x); 
// echo "<br>";
// $y = (int)$x;
// var_dump($y);


// $x = 809889;
// var_dump($x); 
// echo "<br>";
// $y = (string)$x;
// var_dump($y);


// $x = 10.4;
// var_dump($x); 
// echo "<br>";
// $y = (int)$x;
// echo $y;
// echo "<br>";
// var_dump($y);




//---------------------------------------------------------------
//  function on string:

// 1) to check the length / total number of charecters in string 
// strlen()

// $x = "Hellow world";
//  echo strlen($x);

// $x = 76863;
//  echo strlen($x);


//  2) count words-------------->
// st_word_count();

// $xy = "this is a car";
// echo str_word_count($xy);



// string reverse ---------->

// strrev();

//  $x = "hello world";
//  echo strrev($x);


// $x = "Hello";

// $y = "hello";

// echo strcmp($x, $y);

// echo "<br>";

//echo strcmp("xyz", "abc");

//echo strcasecmp($x, $y);



//-----------------------------------------------------
// string---> sub string location 

// $x = "this is a car";
// echo strpos($x,"a");/

// $x = "thisahhj";
// echo strpos($x,"a"); 


// $xy = "PHP is a good programming lanague. You learn PHP and Smalrlty run PHP";

// echo strpos($xy, "PHP"); //find the location of first PHP

// echo "<br>";

// echo strrpos($xy, "PHP"); // find the location of last PHP




// The substr() function returns a part of a string.
// substr(string,start,length)

// $xy = "PHP is a good programming lanague. You learn PHP and Smalrlty run PHP";


// $yz = substr($xy, 35, 13);

// echo $yz; 





//  string---> replace

//str_replace("serch", "write", "data")

// $xy = "PHP is a good programming lanague. You learn PHP and Smalrlty run PHP";
// echo str_replace("PHP","Python",$xy);




// repeat data in string------->

// $x = "hello ";
// Echo str_repeat($x,30);





// //  for uppercase ------------>// 
//   // strtpupper()

//   $x = "hey how are you";
//   echo strtoupper($x);



//  for Lowercase ------------>// 
//   // strlower()

// $x = "HEY HOW ARE YOU";
// echo strtolower($x);



// $x = "Hello World"; 

// echo lcfirst($x); // first latter change in lowercase
