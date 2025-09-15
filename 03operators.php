<?php  
// operators

// php-----> 8 operators

// 1) Arithmetic operators------>

//     1) +
//     2) -
//     3) *
//     4) /
//     5) % 
//     6) **

// echo 8/2;

// echo 15%2;

// echo 4**3;



// 2) Assignment Operators:
    // 1) =
    // 2) +=
    // 3) -=
    // 4) *=
    // 5) /=
    // 6) %=


    // $x = 20;

    // $y = $x + 10;

    //  //echo $y;
    //  echo $x += 10 # $x = $x + 10;


    
// $q = 10;

//  $q -= 3;

//  echo $q;





// 3) Comparision operators:
         
         // 1) ==
         // 2) ===
         // 3) !=
         // 4) >
         // 5) <
         // 6) >=
         // 7) <=
         // 8) <=>

         //  output-----> true/false

// == --------> case sensetive , ignore datatype
// echo 10 == 10;
// echo "10" == 10;

//echo "deepak"=="Deepak";



// === -----------> (Identical operator) 
// echo "10"===10;
// echo 10===10;

// != (not equal to operator)

// echo 10 != 10;
// echo 10 != 1000;

//echo "deepak" != "deepak";


  //   >

//echo 10 > 19;

//echo 1 > 0;


//   <

//echo 10 < 19;

//echo 1 < 0;


// echo 10 >= 11 ;


// <=> -----> spaceship

// if left < right------> -1
// if left == right-----> 0
// if left > right------> 1

// echo 3 <=> 3;
// echo "\n";

// echo 5 <=> 10;
// echo "\n";

// echo 100 <=> 3;






// 4) Increment / Decrement operators:
    // 1) ++$x    ----> increments $x by one, then returns $x
    // 2) $x++    ----> Returns $x, then increments $x by one
    // 3) --$x    ----> decrements $x by one, then returns $x
    // 4) $x--    ----> Returns $x, then decrements $x by one

// ++$x ---> pre-increment
// $x = 10;
// echo  ++$x;

// $x++ ---> pre-increment
// $x = 10;
// echo  $x++;
// echo "<br>";
// echo $x;

// pre-decrement and post-decrement work same as pre-increment and post-encrement.


// 5) Logical Operators:

// 1) && / and
// 2) xor  ----> or operator
// 3) !  ---> not operaor

// and 

// 0     0     ---> 0
// 1     0     ---> 0
// 0     1     ---> 0
// 1     1     ---> 1

//$age = 20;
//echo $age > 10 and $age < 21;

// echo $age > 10 and $age < 19;


// xor

// 0    0   ------> 0
// 1    0    -----> 1
// 0    1 ------->  1
// 1    1  ------>  1

// $age = 20;
//  echo $age > 10 xor $age == 21;


// 3) !  ---> not operaor

// $x = 10;

// echo !($x > 4);









// Ternery operator -------> ?


 $age = 5;

 echo ($age >= 18) ? "Adult" : "Child";














?>