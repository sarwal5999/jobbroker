<?php
ob_start();
include "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];
$first = $_POST['first'];
$last = $_POST['last'];
$mobile = $_POST['mobile'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

$s = "select * from admin where email='$email'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:admin.php?er=0");
} else {
    $sql = "INSERT INTO `admin`(`email`, `firstname`, `lastname`, `dob`, `gender`, `address`, `password`, `phone`, `otp`) VALUES
 ('$email','$first','$last','$dob','$gender','$address','$password','$mobile','')";
    mysqli_query($conn, $sql);
    header("Location:admin.php?er=1");
}
