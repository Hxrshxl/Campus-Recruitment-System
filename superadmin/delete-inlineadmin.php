<?php

$stu_id = $_GET['sid'];

require_once("db.php");
$sql = "DELETE FROM admin WHERE id_admin = {$stu_id}";
$result = mysqli_query($conn,$sql) or die("Qyery Unsucessful");
header("Location: manageadmin.php ");
mysqli_close($conn);


?>