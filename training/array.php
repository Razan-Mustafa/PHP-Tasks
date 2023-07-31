<?php
// Operator 
// 1===>Arithmetic Operator : +,-,*,...etc
echo gettype( "100");
echo '<br>';
echo gettype( +"100");
echo '<br>';
echo gettype( -"-100");
echo '<br>';
// 2===> Assignment Operator : [+=,-=,*=,/=,...etc]
// 3===> Comparison Operator : [==,!=,<>,===,!==] 
// [>,>=,<,<=,<=>]

// Inc++ , Dec--, ++pre inc ,--pre dec
$a = 0;
echo $a++; 
echo '<br>';
echo $a; 
// echo ++$a;
// echo '<br>';
// 4===> logical operator [and ,&&, or, || ,xor]

// string operator (.)
$x = "ali";
$y = "omar";
// echo "$x $y";
// echo '<br>';
// echo "{$x}{$y}";
// echo $x." ".$y." ".Sujoud." ".fullname();
echo '<br>';
// Array operator ==>deal with array 
/*
+    union
==   same key ,same value 
!=  , <>  not equal value and key
===    same key, value , order, type 
!==    not same key, value , order, type 
*/

$arr1 = [1=>"A",2=>"B"];
$arr2 = [3=>"C",4=>"D"];
$arr3 = $arr1 + $arr2;
print_r($arr3);
echo '<br>';
$arr4 = [1=>"10",2=>"20"];
$arr5 = [2=>20,1=>10];
var_dump($arr4===$arr5);
// echo '<br>';

// () then ** then || && then from left to right 

// array type 
// Example of an Indexed Array
$fruits = array("Apple", "Banana", "Orange", "Mango");

// Accessing elements
echo $fruits[0]; // Output: "Apple"
echo $fruits[2]; // Output: "Orange"

// Using for loop to print elements
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}


// Example of an Associative Array
$student = array(
    "name" => "John",
    "age" => 20,
    "email" => "john@example.com"
);

// Accessing elements
echo $student["name"]; // Output: "John"
echo $student["email"]; // Output: "john@example.com"
// Using foreach loop to print elements
foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}



// Example of a Multidimensional Array
$employees = array(
    array("name" => "John", "job" => "Developer"),
    array("name" => "Alice", "job" => "Designer"),
    array("name" => "Bob", "job" => "Manager")
);

// Accessing elements
echo $employees[0]["name"]; // Output: "John"
echo $employees[1]["job"]; // Output: "Designer"
// Using nested foreach loop to print elements
foreach ($employees as $employee) {
    foreach ($employee as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<br>";
}

?>

