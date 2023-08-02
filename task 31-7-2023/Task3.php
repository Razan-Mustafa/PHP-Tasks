<?php 


// 1.**  Required **	Create a script using a for loop to add all the integers between 0 and 30 and display the total. **  Required **

// Expected Output:  total as a number 

$sum=0;
for ($i = 0; $i <=30 ; $i++){
    $sum += $i;
}
echo $sum;

echo "<br>";
echo "<br>";
// 2.**  Optional **	Create a script to generate the following pattern, using the nested for loop. 


// Expected Output:

// A A A A A 
// A A A B B 
// A A C C C 
// A D D D D 
// E E E E E

// 3.**  Optional **	Create a script to generate the following pattern, using the nested for loop. . **  Optional **

// Expected Output:

// 1 1 1 1 1 
// 1 1 1 2 2 
// 1 1 3 3 3 
// 1 4 4 4 4 
// 5 5 5 5 5


// 4.**  Required **	Create a script to generate the following pattern, using the nested for loop. **  Required **

// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5

function Pattern($size)
{
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            if ($i == $j) {
                echo $i . ' ';
            } else {
                echo '0 ';
            }
        }
        echo "<br>";
    }
}

$patternSize = 8;
Pattern($patternSize);
echo "<br>";
echo "<br>";

// 5.**  Required **	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. 

// Sample Input: 5
// Expected Output: 120
function factorial($n){
$factorial=1;
for ($i = 1; $i <= $n ; $i++){
    $factorial *= $i;
}
echo $factorial;
}
factorial(5);
echo "<br>";
echo "<br>";





// 6.**  Required **	Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … **  Required **
function Sequence($n)
{
    $Array = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $nextNumber = $Array[$i - 1] + $Array[$i - 2];
        array_push($Array, $nextNumber);
    }
    echo implode(', ', $Array);
}
Sequence(10);

echo "<br>";
echo "<br>";


 
// 7.**  Optional **	Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. . **  Optional **
// 1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5
// 2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10
// 3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15
// 4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20
// 5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25
// 6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30

 

 
// 8.**  Optional **	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".. **  Optional **

// Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….

 
// 9.**  Required **	Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **
// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15 

function Triangle($line) {
    $number = 1;

    for ($i = 1; $i <= $line; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number . " ";
            $number++;
        }
        echo "<br>";
    }
}
Triangle(5);






// 10.**  Optional **	Write a PHP program to print the following pattern. . **  Optional **
   
// Expected Output:

//      A 
//     A B 
//    A B C 
//   A B C D 
//  A B C D E 
//   A B C D 
//    A B C 
//     A B 
//      A

?>