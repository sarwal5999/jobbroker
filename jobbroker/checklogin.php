<?php
include_once"connection.php";

@session_start();
$email=$_POST["email"];
$password=$_POST["password"];
$select="select * from admin where email='$email' and password='$password'";
$data=mysqli_query($conn,$select);
if (mysqli_num_rows($data)>0)
{
    $_SESSION["admin"]=$email;
    header("location:adminhome.php");
    echo 0;
}
else{
    header("Location:adminlogin.php?er=1");
    echo 1;
}
?>

