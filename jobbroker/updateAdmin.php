<?php
ob_start();
include "adminheader.php";


$email = $_POST['email'];
$password = $_POST['password'];
$first = $_POST['first'];
$last = $_POST['last'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$sql = "UPDATE `admin` SET `firstname`='$first',`lastname`='$last',`dob`='$dob',`gender`='$gender',`address`='$address',`phone`='$mobile' WHERE `email`='$email'";
if (mysqli_query($conn, $sql)) {
    header("Location:viewAdmin.php?er=3");
} else {
    header("Location:viewAdmin.php?er=2");
}
