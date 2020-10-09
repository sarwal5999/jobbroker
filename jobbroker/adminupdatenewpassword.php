<?php
include_once "connection.php";
session_start();

$email = $_SESSION["admin1"];
$newpassword = $_POST["newpassword"];
$sql = "UPDATE `admin` SET password='$newpassword' WHERE email='$email'";
if (mysqli_query($conn, $sql)) {
    session_destroy();
    echo 0;
    header("Location:adminlogin.php?er=5");
} else {
    echo 1;
    header("Location:adminlogin.php?er=4");
}