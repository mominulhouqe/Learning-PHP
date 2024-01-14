<?php

// 8 kind of data types in php
/* 
1.Number types
2.String 
3.boolean
4.float
5.Array
6.Null
7.Resource
8.object

*/

// Example of datatypes 
// 1.Number types

$price = 1245;
echo "</br> Price = " . $price;
// 2.String
$address = " Dhaka , Banagladesh";
echo "</br> My Address = " . $address;
// 3.Boolean
$isAdmin = true;
echo "</br> He is a Admin = " . $isAdmin;
// 4.float

$cgpa=3.5;
echo "</br> My Computer science result is = ". $cgpa;

// Array
$car = array("Volvo","BMW","Toyta","Motorcy",);
var_dump($car);
// var_dump er maddome amara kun type er data seta check korte parbo


// 

$x=2334.6;
$int_cast=(int)$x;
echo $int_cast;


$a="kilomiters 34";
$a=(float)$a;
echo $a;

const myCar="BMW";
echo "</br> This my car Name = ". myCar;

// define("Cars",[
//     "Alfa Remo",
//     "Toyota"
// ]);
// echo "</br> Car List  = ".Cars[0]



define("name","</br> My Name is Mominul Houqe");

function myName(){
    echo name;
}
myName();


?>