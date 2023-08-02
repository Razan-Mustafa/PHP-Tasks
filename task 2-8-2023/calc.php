<?php
session_start();
echo "<h1>Hello ".$_SESSION['user'] . "</h1>";
include 'function.php';
    $_SESSION['num1'] = $_GET['n1'] ?? " ";
    $_SESSION['num2']= $_GET['n2'] ?? " ";

    $num1 = $_SESSION['num1'];
    $num2 = $_SESSION['num2'];

    $result =" ";
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $num1 = $_GET['n1'] ?? " ";
        $num2 = $_GET['n2'] ?? " ";
    
        if (!is_numeric($num1) || !is_numeric($num2)) {
            $_SESSION["mas"] = "Please enter valid numbers for First and Second Numbers";
        } else {
            if (isset($_GET['add'])) {
                $result = add($num1, $num2);
            } elseif (isset($_GET['multi'])) {
                $result = multi($num1, $num2);
            } elseif (isset($_GET['mine'])) {
                $result = mine($num1, $num2);
            } elseif (isset($_GET['divide'])) {
                $result = divide($num1, $num2);
            };
        };
    };
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculater</title>
    <style>
        button {
            margin : 10px 10px 10px 0;
        }
        p{
            color:red;
        }
    </style>
</head>
<body>
    <form action="calc.php" method ="get">
        First Number <br>
        <input type="text" value = "<?php echo $num1?>" name="n1" required> <br>
        Second Number <br>
        <input type="text" value = "<?php echo $num2 ?>" name="n2" required><br>
        <button type="submit" name="add"> + </button>
        <button type="submit" name="multi"> * </button>
        <button type="submit" name="mine"> - </button>
        <button type="submit" name="divide"> / </button> <br>
        Result <br>
        <input type="text" value = " <?php echo $result ?>" name="result"><br>
        
        <p>
        <?php                 
           if (isset($_SESSION["mas"])) {
               echo $_SESSION["mas"];
               unset($_SESSION["mas"]);
           }
         ?>
        </p>
    </form>
</body>
</html>



