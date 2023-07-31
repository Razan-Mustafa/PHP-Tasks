<?php
/*
if (cond){
    //statement
}
else{
    //statement
}
*/

/*
if (cond) {//statement }
elseif (cond) {//statement }
else {//statement}
*/

// Alternate Syntax
?>

<?php if (5<10): ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Love PHP</h1>
</body>
</html>
<?php endif; ?>

<?php 
// Ternary cond operator
$w = 10;
echo $w >8 ? "Good" : "Bad";

echo '<br>';

$day = "Sat";
switch ($day){
    case "Sat":
        echo "the day is Saturday";
        break;
    case "Mon":
        echo "the day is Monday";
        break;  
    default:
    echo "other days";
}

?>

