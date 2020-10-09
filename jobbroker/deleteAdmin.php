<?php
ob_start();
include "adminheader.php";
$email = $_REQUEST['q'];
$sql = "delete from admin where email='$email'";
if (mysqli_query($conn, $sql)) {
    header("Location:viewAdmin.php?er=1");
} else {
    header("Location:viewAdmin.php?er=0");
}
