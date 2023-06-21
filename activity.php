<?php
require "connect.php";
if(isset($_POST["insert"])){
$name = $_POST['name'];
$hour = $_POST['hour'];

$sql = "SELECT * FROM activity WHERE name = '$name'";

$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);


if ($count == 1) {
    echo json_encode('Error');
} else {
    $insert = "INSERT INTO activity(name,hour)VALUES('$name','$hour')";
    $query = mysqli_query($con, $insert);
    if ($query) {
        echo json_encode('Succeed');
    }
}
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
        <input type="text" name="name">name
        <input type="number" name="hour">hour
        <input type ="submit" name ="insert">
    </form>
</body>
</html>