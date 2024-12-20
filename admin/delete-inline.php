<?php

$stu_id = $_GET['sid'];
$id = $_GET['id'];
require_once("db.php");
$redirectUrl = "viewbatch.php?id=" . urlencode($id);
$sql = "DELETE FROM users WHERE PRN = {$stu_id}";
$result = mysqli_query($conn,$sql) or die("Qyery Unsucessful");
header("Location: $redirectUrl ");
mysqli_close($conn);


?>