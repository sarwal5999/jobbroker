<?php
ob_start();
include "adminheader.php";
$id = $_REQUEST['q'];
$sql = "delete from employer where e_id='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location:viewemployer.php?er=1");
} else {
    header("Location:viewemployer.php?er=0");
}
