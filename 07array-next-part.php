<?php
//  $zx = [12, 45, 91,20,43,56];
// // for($i = 0; $i<count($zx); $i++){
// //     echo $zx[$i]."<br>";
// // }

// //foreach loop----------->
// // syntax
// // foreach (array_name as variable){

// // }


// foreach($zx as $x){
//     echo $x."<br>";
// }




// 2) associative array-----> use named kay that we assigned to them

// $student = array("name"=>"moris","age"=>21, "phone_number"=>9876432190);
// // print_r($student);

// // echo $student["age"];

// //print_r (array_values($student));
// //print_r (array_keys($student));

// foreach($student as $x){
//     echo $x."<br>";
// }



// $student = array("name"=>"moris","age"=>21, "phone_number"=>9876432190);
 
// $student["address"] = "india";  //add new element
// print_r($student);

// $student["name"] = "nick"; //update existing element
// print_r($student);


// add multiple element

// $student = array("name"=>"moris","age"=>21, "phone_number"=>9876432190);


// $student+=["address"=>"india", "pincode"=>563532];

// print_r($student);



// merge  the array -------> same as indexed array

// $student = array("name"=>"moris","age"=>21, "phone_number"=>9876432190);
// $address = array("state"=>"punjab", "country"=>"india", "pincode"=>563532);

// print_r(array_merge($student,$address));


// $student = array("name"=>"moris","age"=>21, "phone_number"=>9876432190);

// foreach($student as $x => $y){
//     echo $x." : ".$y."<br>";
    
// }



// 3) multidimensional array-----> containing one or more array

// $student = array(
//     101 => array("name"=>"kriss", "course"=>"python", "phone"=>9348654986),
//     102 => array("name"=>"nick", "course"=>"php", "phone"=>9543299765),
//     103 => array("name"=>"moris", "course"=>"c", "phone"=>965308642),
//     104 => array("name"=>"john", "course"=>"java", "phone"=>["parent"=>9665337737, "persnol"=>9365653655]),
// );


// //print_r($student);

// foreach($student as $x){
//      print_r($x);
//       echo "<br>";
// }











?>