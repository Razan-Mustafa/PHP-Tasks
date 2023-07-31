<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>test</h1>";
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    for ($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i] . ",";
    }
    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    echo "<br>";

    //Associative Arrays
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }

    //Multidimensional Array
    echo "<br>";

    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    for ($row = 0; $row < count($cars); $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < count($cars[$row]); $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    echo "<br>";

    //While loop
    $users = ['Mansaf', 'Maglobeh', 'Dwali']; //define array

    $i = 0;

    while ($i < count($users)) {
        echo $users[$i];
        $i++;
        echo '<br>';
    }

    echo '<br>';

    // $users = ['Mansaf', 'Maglobeh', 'Dwali'];

    $i = 0;

    do {
        echo $users[$i];
        $i++;
        echo '<br>';
    } while ($i < count($users));
    echo '<br>';

    ?>
</body>

</html>