<?php
ob_start();
include "adminheader.php";


$email = $_POST['email'];
$name = $_POST['name'];
$id = $_POST['id'];
$mobile = $_POST['mobile'];

$sql = "UPDATE `employer` SET `e_name`='$name',`e_phone`='$mobile',`e_email`='$email' WHERE `e_id`='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location:viewemployer.php?er=3");
} else {
    header("Location:viewemployer.php?er=2");
}
