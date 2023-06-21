<?php
require "connect.php";

$email = $_POST['email'];

$level = $con->query("SELECT level FROM user WHERE studentId = '$email'");
$list = array();

while($rowdata = $level->fetch_assoc()){
    $list[] = $rowdata;
}
echo json_encode($list);


?>