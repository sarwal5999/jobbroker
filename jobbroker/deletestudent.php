<?php
ob_start();
include "adminheader.php";
$id = $_REQUEST['q'];
$sql = "delete from student where studentid='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location:viewstudent.php?er=1");
} else {
    header("Location:viewstudent.php?er=0");
}
