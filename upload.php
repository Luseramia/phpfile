<?php
require "connect.php";
if(isset($_POST["insert"])){
    $image = $_FILES['image']['name'];
    $name = $_POST["name"];

    $ImagePath = 'uploads/' .$image;
    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name,$ImagePath);

    $con->query("INSERT INTO img(name,image)VALUES('$name','$image')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="text" name="name">
        <input type ="submit" name="insert">
    </form>
</body>
</html>