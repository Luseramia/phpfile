<?php
require "connect.php";
$act = $con->query("SELECT * FROM activity");
$list = array();
while($rowdata = $act->fetch_assoc()){
    $list[] = $rowdata;
}
echo json_encode($list);

?>