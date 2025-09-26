<?php

// Loop

// 1) while loop
// 2) Do/while loop
// 3) for loop
// 4)forEach --------> array





// while loop ------->
// The while loop executes a block of code repeatedly until the condition is FALSE.
// Once the condition gets FALSE, it exits from the body of loop.

// $a = 1;
// while($a<=10){
//     echo $a." Hello world!<br>";
//     $a++;
// }


// $a = 10;
// while($a>=1){
//     echo $a." hello world<br>";
//     $a--;
// }


// $a = 10;
// while($a>=1){
//     echo $a." hello world<br>";
//     $a=$a-2; // decrement of 2
// }


// $a = 1;
// while($a<=100){
//     echo $a." hello world<br>";
//     $a=$a+3; // increment of 3
// }




// do/while loop------->
// It is guaranteed to execute the code at least one time always
// because the condition is checked after executing the code.


// $a =1;
// do{
//     echo $a." hello world <br>";
//     $a++;

// }while($a<=10)






// for loop--------------->

// PHP for loop can be used to traverse set of code for the specified number of times.

// It should be used if the number of iterations is known otherwise use while loop.


// for($i = 1; $i<=100; $i++){
//     echo $i." hello world<br>";
// }



//  for($i = 100; $i>=1; $i--){
//     echo $i." hello world<br>";
// }


// for($i = 1; $i<=100; $i=$i+2){
//     echo $i." hello world<br>";
// }


// practice question----------->

// 1) table of 2 (2 * 1 = 2)

// for($i = 1; $i<=10; $i++){
//     echo "2 * $i = ". 2*$i . "<br>";
// }


// 2) print 1 to 100,
// if number divisible by 3 print hello, if dividible by 5
// print world, if divisible by both 3 and 5 print hello world.

for($i= 0; $i<=100; $i++){
    if($i%3==0 && $i%5==0){
        echo"hello world<br>";
    }elseif($i%3==0){
        echo "hello <br>";
    }elseif($i%5==0){
        echo "world <br>";
    } else {
        echo $i."<br>";
    }
}


?>