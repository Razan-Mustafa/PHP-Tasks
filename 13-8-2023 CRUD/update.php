<?php
include_once "conect.php";

if (isset($_POST)){
$id2 = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['img'];   
};


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id2?>"> <br>

        Product Name: <br>
        <input type="text" name="name" value="<?php echo $name?>" required> <br>
        
        Product Price: <br>
        <input type="text" name="price" value="<?php echo $price?>" required><br>

        Product Image: <br>
        <input type="text" name="img" value="<?php echo $image?>" required><br>

        <button type="submit" name="btn"> Update </button>
    </form>

    <form action="table.php">
        <button>Go To Products Table </button>
    </form>
</body>
</html>

<?php



if (isset($_POST['btn']) && isset($_POST['price']) && isset($_POST['name']) && $_POST['img']){
    $name2 = $_POST['name'];
    $price2 = $_POST['price'];
    $image2= $_POST['img'];

    $update = "UPDATE CRUD SET ProductName='$name2' , ProductPrice='$price2' , ProductImage='$image2' WHERE id=$id2";

    if (mysqli_query($connection, $update)) {
    header ("location:table.php");
    };

};
?>