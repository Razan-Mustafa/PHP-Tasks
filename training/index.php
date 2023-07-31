<?php
//code ;
// Automatic conversion
echo true + true ; //2
echo '<br>';
echo false + true ;  //1
echo '<br>';
echo 5 + "5";
echo '<br>';
echo 5 + "5 persons";
echo '<br>';

// type casting + gettype method
echo 5 + (int)"5 persons";
echo '<br>';
echo (int)10.5 + (int)10.5 ;
echo '<br>';
echo (int)(10.5+10.5);
echo '<br>';
echo gettype(10.5+10.5);
echo '<br>';
var_dump(10.5+10.5);
echo '<br>';
//just return false if empty string " " ,array(),[],0,"0" 
var_dump((bool)"0");

?>