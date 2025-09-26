<?php

// function------->

// function hello(){
//     echo "how are you <br>";

// }
 
// hello();

// hello();



// function sum(){
//     $a = 12;
//     $b = 30;
//     echo $a+$b;
// }

// sum();




// parameters and arguments

// function sum($x,$y){
//     echo "sum of $x and $y = ". $x+$y;
// }

// sum(12,34);



// function family($fname){
//     echo $fname." jha"."<br>";
// }

// family("deepak");
// family("ram");




// default parameter

// function sum($x=0,$y=0){
//     echo $x+$y."<br>";
// }

// sum(2,4);
// sum(6);
// sum();



// variable length parameter--->

// function hello(...$x){
//     print_r($x);
//     echo "<br>";
// }

// hello(12,45,88,1,46);
// hello("dws","dwhg",21,"jhuug");





// Keyword arguments / Named arguments

function info($name,$age){
    echo "user name is $name and age is $age <br>";
}

info(age:20, name:"deepak");
info(20,"deepak");














 ?>