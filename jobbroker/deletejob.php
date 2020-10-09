<?php
ob_start();
include "adminheader.php";
$id = $_REQUEST['q'];
$sql = "delete from joblist where j_id='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location:viewjob.php?er=1");
} else {
    header("Location:viewjob.php?er=0");
}
