<?php
session_start();
require_once("db.php");

//If user clicked update profile button
if(isset($_POST)) {

	// Escape special characters
	$firstname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lname']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
	$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
	$stream = mysqli_real_escape_string($conn, $_POST['stream']);
	$passingyear = mysqli_real_escape_string($conn, $_POST['passingyear']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
    $cgpa = mysqli_real_escape_string($conn, $_POST['cgpa']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
	

	// Update Query
	$sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', address='$address', CGPA = ' $cgpa',password = '$pass' ,city='$city', state='$state', contactno='$contactno', qualification='$qualification', stream='$stream', passingyear='$passingyear', dob='$dob', age='$age' WHERE PRN='$_SESSION[id_user]'";

	if($conn->query($sql) === TRUE) {
		header("Location: profile.php");
		exit();
	} else {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	header("Location: dashboard.php");
	exit();
}