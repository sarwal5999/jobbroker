<?php
include_once "connection.php";

@session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$select = "select * from student where email='$email' and password='$password'";
$data = mysqli_query($conn, $select);
if (mysqli_num_rows($data) > 0) {
    $_SESSION["student"] = $email;
    header("location:studenthome.php");
    echo 0;
} else {
    header("Location:studentlogin.php?er=1");
    echo 1;
}
?>

