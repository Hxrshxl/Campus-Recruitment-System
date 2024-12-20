<?php
//To Handle Session Variables on This Page
session_start();
//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
//If user Actually clicked register button
if(isset($_POST)){
    $bid = mysqli_real_escape_string($conn, $_POST['bid']);
    $bname = mysqli_real_escape_string($conn, $_POST['bname']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $section = mysqli_real_escape_string($conn, $_POST['section']);

    $sql = "SELECT bid FROM batch WHERE bid='$bid'";
	$result = $conn->query($sql);
	//if email not found then we can insert new data
	if($result->num_rows == 0){
        $sql1 = "INSERT INTO batch(bid,bname,branch,year,sec) values('$bid','$bname','$branch','$year','$section')";
        if($conn->query($sql1)===TRUE) {
            $_SESSION['registerCompleted'] = true;
			header("Location: admindashboard.php");
			exit();
		} else {
			echo "Error" . $sql . "<br>" . $conn->error;
        }
    }else{
        $_SESSION['registerError'] = true;
		header("Location: createbatch.php");
		exit();
    }    
    $conn->close();
}else{
    //redirect them back to Create page if they didn't click register button
	header("Location: createbatch.php");
	exit();
}