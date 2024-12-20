<?php
// To Handle Session Variables on This Page
session_start();
// Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");

// If the user actually clicked the register button
if (isset($_POST)) {
    // Escape Special Characters In String First
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
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Encrypt Password using password_hash()
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to check if email already exists or not
    $sql = "SELECT email FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    // If email not found then we can insert new data
    if ($result->num_rows == 0) {
        // This variable is used to catch errors during the upload process. False means there is some error and we need to notify the user.
        $uploadOk = true;

        // Folder where you want to save your resume. THIS FOLDER MUST BE CREATED BEFORE TRYING
        $folder_dir = "uploads/resume/";

        // Getting Basename of the file.
        $base = basename($_FILES['resume']['name']);
        $resumeFileType = pathinfo($base, PATHINFO_EXTENSION);

        // Setting a random non-repeatable file name.
        $file = uniqid() . "." . $resumeFileType;
        $filename = $folder_dir . $file;

        // We check if the file is saved to our temp location or not.
        if (file_exists($_FILES['resume']['tmp_name'])) {
            // Check if the file type is allowed
            if ($resumeFileType == "pdf" || $resumeFileType == "doc" || $resumeFileType == "docx") {
                // Check file size
                if ($_FILES['resume']['size'] < 500000) { // File size is less than 5MB
                    // If all conditions are met, copy the file from the server temp location to the uploads folder.
                    move_uploaded_file($_FILES["resume"]["tmp_name"], $filename);
                } else {
                    // Size Error
                    $_SESSION['uploadError'] = "Wrong Size. Max Size Allowed: 5MB";
                    $uploadOk = false;
                }
            } else {
                // Format Error
                $_SESSION['uploadError'] = "Wrong Format. Only PDF Allowed";
                $uploadOk = false;
            }
        } else {
            // File not copied to temp location error.
            $_SESSION['uploadError'] = "Something Went Wrong. File Not Uploaded. Try Again.";
            $uploadOk = false;
        }

        // If there is any error then redirect back.
        if ($uploadOk == false) {
            header("Location: register.php");
            exit();
        }

        // SQL new registration insert query using prepared statements
        $stmt = $conn->prepare("INSERT INTO users(firstname, lastname, email, password, address, city, state, contactno, qualification, stream, passingyear, dob, age, resume) VALUES ( '$firstname', '$lastname', '$email', '$passwordHash', '$address', '$city', '$state', '$contactno', '$qualification', '$stream', '$passingyear', '$dob', '$age', '$file')");
        $stmt->bind_param("ssssssssssss", $firstname, $lastname, $email, $passwordHash, $address, $city, $state, $contactno, $qualification, $stream, $passingyear, $dob, $age, $file);
        $stmt->execute();
        $stmt->close();

        // Uncomment the following section for email confirmation
        /*
        $hash = md5(uniqid());
        $to = $email;
        $subject = "Job Portal - Confirm Your Email Address";
        $message = '
            <html>
            <head>
                <title>Confirm Your Email</title>
            </head>
            <body>
                <p>Click Link To Confirm</p>
                <a href="yourdomain.com/verify.php?token=' . $hash . '&email=' . $email . '">Verify Email</a>
            </body>
            </html>
        ';
        $headers[] = 'MIME-VERSION: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'To: ' . $to;
        $headers[] = 'From: hello@yourdomain.com';
        $result = mail($to, $subject, $message, implode("\r\n", $headers)); // \r\n will return a new line.
        if ($result === TRUE) {
            // If data inserted successfully, set some session variables for easy reference and redirect to login
            $_SESSION['registerCompleted'] = true;
            header("Location: login.php");
            exit();
        }
        */

        // If data inserted successfully, set some session variables for easy reference and redirect to login
        $_SESSION['registerCompleted'] = true;
        header("Location: login.php");
        exit();
    } else {
        // If email found in the database, show email already exists error.
        $_SESSION['registerError'] = true;
        header("Location: register.php");
        exit();
    }

    // Close the database connection.
    $conn->close();
} else {
    // Redirect them back to the register page if they didn't click the register button.
    header("Location: register.php");
    exit();
}
?>
