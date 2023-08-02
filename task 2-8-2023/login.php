<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin-bottom: 10px;
        }
        h3 {
            color : red ;
        }
    </style>
</head>
<body>
    <h1> login </h1>
    <form action="checklog.php" method="post">
        User name <br>
        <input type="text" value = "" name="user" required> <br>
        Email <br>
        <input type="text" value = "" name="email" required><br>
        Password <br>
        <input type="password" value = "" name="pass" required><br>
        <button> Login </button>
        <h3> 
         <?php                 
           if (isset($_SESSION["massage"])) {
               echo $_SESSION["massage"];
               unset($_SESSION["massage"]);
           }
         ?>
         </h3>

    </form>
</body>
</html>