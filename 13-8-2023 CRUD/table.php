<?php
include_once "conect.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of Product</title>
    <link rel="stylesheet" href="./css/table.css">
</head>
<body>
    <?php
    $select = "SELECT * FROM CRUD";
    $result = mysqli_query($connection, $select);
    if (mysqli_num_rows($result) > 0){
    ?>
    <form action="Add.php">
        <button>Add Product </button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php
            
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $html = <<<HTML
                    <tr>
                        <td> {$row["id"]} </td>
                        <td>{$row["ProductName"]}</td>
                        <td>{$row["ProductPrice"]}</td>
                        <td><img src="{$row['ProductImage']}" alt=""></td>
                        <td>
                            <form action="update.php" method="POST">
                                <input name="id" type="hidden"  value="{$row['id']}" >
                                <input name="name" type="hidden"  value="{$row['ProductName']}" >
                                <input name="price" type="hidden"  value="{$row['ProductPrice']}" >
                                <input name="img" type="hidden"  value="{$row['ProductImage']}" >                                
                                <button type="submit">Update</button>
                            </form>
                        <td>
                            <form action="delete.php" method="post" onsubmit="return confirmDelete()">
                                <button name="btndel" value="{$row['id']}">delete</button>
                            </form>
                        </td>
                    </tr>
                    HTML;
                    echo $html;
                }
                //mysqli_free_result($result);
            } else {
                echo "Error: " . mysqli_error($connection);
            };
        ?>
        <?php
        } 
        else {
            echo "There are no products available";
        };
        ?>
        </tbody>
    </table>

    
<script>
    function confirmDelete() {
    return confirm("Are you sure you want to delete this record?");
}
</script>

</body>
</html>