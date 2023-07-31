<?php
// Example of a for loop
for ($i = 1; $i <= 5; $i++) {
    echo " $i ";
}



// Example of a foreach loop with an array
$colors = array("red", "green", "blue");

foreach ($colors as $color) {
    echo $color . "<br>";
}



// Example of a while loop
$i = 1;

while ($i <= 5) {
    echo "Iteration $i <br>";
    $i++;
}




// Example of a do-while loop
$i = 1;

do {
    echo "Iteration $i <br>";
    $i++;
} while ($i <= 5);


?>