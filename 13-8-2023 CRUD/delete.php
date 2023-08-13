<?php
include_once "conect.php";

$id = $_POST["btndel"];

$del ="DELETE FROM CRUD WHERE id = $id";

if (mysqli_query($connection, $del)) {
    header("Location:table.php");
} else {
    echo "Error: " . mysqli_error($connection);
}
