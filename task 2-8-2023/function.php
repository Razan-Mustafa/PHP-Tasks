<?php

function add($num1 , $num2){
    return $num1 + $num2;
};

function multi($num1 , $num2){
    return $num1 * $num2;
};

function divide($num1 , $num2){
    if ($num2 != 0) {
    return $num1 / $num2;
}else {
    $_SESSION['mas'] ="Can not divide by 0";
};
};

function mine($num1 , $num2){
    return $num1 - $num2;
};



?>