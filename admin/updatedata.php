<?php
require_once("db.php");
$id = $_GET['id'];
$stu_id = $_GET['PRN'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "UPDATE users SET email ='{$email}', password ='{$pass}' WHERE PRN ='{$stu_id}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

$redirectUrl = "viewbatch.php?id=".urlencode($id);
header("Location: $redirectUrl");

mysqli_close($conn);


?>
