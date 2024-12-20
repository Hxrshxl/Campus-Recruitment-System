<?php
session_start();
require_once("db.php");
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['add'])) {
    $allowed_ext = ['xls','csv','xlsx'];
    $file_name = $_FILES['importfile']['name'];
    $checking = explode(".", $file_name);
    $file_extension = end($checking);
    $bid = mysqli_real_escape_string($conn, $_POST['bid']);

    if (in_array($file_extension, $allowed_ext)) 
    {
        $targetPath = $_FILES['importfile']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
        $data = $spreadsheet->getActiveSheet()->toArray();
        foreach($data as $row){
            $prn = $row['0'];
            $email = $row['1'];
            $pass = $row['2'];

            $checkstudent = "SELECT PRN FROM users WHERE PRN='$prn' ";
            $checkstudent_result = mysqli_query($conn, $checkstudent);

            if(mysqli_num_rows($checkstudent_result) > 0){
                //already exist with update
                $up_query = "UPDATE users SET email ='$email', password='$pass' WHERE PRN='$prn'";
                $up_result = mysqli_query($conn,$up_query );
                $msg=1;
            }else{
                //new data insert
                $in_query = "INSERT INTO users(PRN,email,password,bid) VALUES ('$prn','$email','$pass','$bid') ";
                $in_result = mysqli_query($conn,$in_query );
                $msg=1;
            }

        }
        if(isset($msg)){
            $_SESSION['status'] = "File Imported Successfully";
            header("Location: addstudent.php");
        }else{
            $_SESSION['status'] = "File Importing Failed";
            header("Location: addstudent.php");
        }
    } else {
        $_SESSION['status'] = "Invalid File";
        header("Location: addstudent.php");
        exit();
    }
}
