<?php
ob_start();
include "connection.php";

$email = $_POST['email'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];


$s = "select * from employer where e_email='$email'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:addemployer.php?er=0");
} else {
    $sql = "INSERT INTO `employer`(`e_id`, `e_name`, `e_phone`, `e_email`) VALUES (null ,'$name','$mobile','$email')";
    if (mysqli_query($conn, $sql)) {
        header("Location:addemployer.php?er=1");
    } else {
        header("Location:addemployer.php?er=2");
    }
}
