<?php
require "connect.php";

$email = $_POST['email'];

$data = $con->query("SELECT * FROM user WHERE studentId = '$email'");
$list = array();

while($rowdata = $data->fetch_assoc()){
    $list[] = $rowdata;
}
echo json_encode($list);


?>