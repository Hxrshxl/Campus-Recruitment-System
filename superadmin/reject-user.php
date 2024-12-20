<?php
session_start();
require_once("../db.php");
$sql = "UPDATE apply_job_post SET status='3' WHERE id_jobpost='$_GET[id_jobpost]' AND PRN='$_GET[id_user]'";
if($conn->query($sql) === TRUE) {
	header("Location: view-job-application.php");
	exit();
} else {
	echo "Error!";
}
$conn->close();