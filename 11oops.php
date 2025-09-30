<?php

//  oops-----> object-oriented programming language.

// class-----> class is a templete|blueprint for object.
// objects----> object is an instance of a class.


// class -->
// class class_name{
//     code....
// }

// class my_class{

//     function method1(){
//         echo "this is my first mrthod <br>";

//     }

//     function method2(){
//         echo "this is my second method <br>";
//     }

//     function method3(){
//         echo "this is my third method <br>";
//     }
// }

// $obj = new my_class();

// $obj->method1();
// $obj->method2();
// $obj->method3();




// class calculator{
//     public $x,$y;

//     function add(){
//         $z = $this->x + $this->y;
//         echo $z."<br>";
//      }
//     function sub(){
//         $z = $this->x - $this->y;
//         echo $z."<br>";
//      }
//     function multy(){
//         $z = $this->x * $this->y;
//         echo $z."<br>";
//      }
//     function div(){
//         $z = $this->x * $this->y;
//         echo $z."<br>";
//      }

// }

// $obj1 = new calculator();
// $obj1->x = 10;
// $obj1->y = 5;

// $obj1 ->add();

// $obj2 = new calculator();
// $obj2->x = 20;
// $obj2->y = 10;

// $obj2 ->multy();



// Constructor :
//         is a spacial method in our class. to build constructor we use keyword name
//          __construct. 
//          The main fnctionality of constructer is it calls automatically when we create an object of a class.




// class const1{
//     function __construct(){
//         echo "this is constructor<br>";
        
//     }

//     function method1(){
//         echo "this is method 1<br>";
//     }
//     function method2(){
//         echo "this is method 2";
//     }
// }

// $obj = new const1();
// $obj->method1();
// $obj->method2();



// class calculator{
//     public $x,$y;
//     function __construct($a,$b){
//         $this->x=$a;
//         $this->y=$b;    
//     }

//     function sum(){
//         $z = $this->x + $this->y ;
//         echo $z;
//     }
//     function sub(){
//         $z = $this->x - $this->y ;
//         echo $z;
//     }
// }

// $obj = new calculator(10,5);
// $obj->sub();


// $obj2 = new calculator(20,10);
// $obj2->sum();












?>