<?php
require "connect.php";

$update = "UPDATE user SET hour = 3 where id = 1";
mysqli_query($con, $update);

?>