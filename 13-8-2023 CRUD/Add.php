<?php
include_once "conect.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <form action="Add.php" method="post">
        <input name="id" type="hidden">

        Product Name: <br>
        <input type="text" name="name" required> <br>

        Product Price: <br>
        <input type="text" name="price" required><br>

        Product Image: <br>
        <input type="text" name="img" required><br>

        <button type="submit" name="btn"> create </button>
    </form>

    <form action="table.php">
        <button>Go To Products Table </button>
    </form>
</body>
</html>

<?php
if (isset($_POST['btn']) && isset($_POST['price']) && isset($_POST['name']) && $_POST['img']){
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['img'];



$insert = "INSERT INTO CRUD (ProductName, ProductPrice, ProductImage) 
VALUES ('$name', '$price', '$image')";

if (mysqli_query($connection, $insert)) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . mysqli_error($connection);
}
}else {
    echo "please fill all data";
}
?>

