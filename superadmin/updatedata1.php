<?php
require_once("db.php");
$id = $_GET['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "UPDATE admin SET  Name ='{$name}', username ='{$username}',email ='{$email}', password ='{$pass}' WHERE id_admin ='{$id}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");


header("Location: manageadmin.php");

mysqli_close($conn);


?>
