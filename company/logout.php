<?php 

session_start();
session_unset();
session_destroy();

header("Location: /campus/index.php");
exit();
?>
