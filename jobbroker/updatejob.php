<?php
ob_start();
include "adminheader.php";

$jid = $_POST['jid'];
$name = $_POST['name'];
$location = $_POST['location'];
$start = $_POST['start'];
$end = $_POST['end'];
$eid = $_POST['eid'];
$scid = $_POST['scid'];

$sql = "UPDATE `joblist` SET `j_name`='$name',`j_location`='$location',`j_startdate`='$start',`enddate`='$end',`e_id`='$eid',`sc_id`='$scid' WHERE `j_id`='$jid'";
if (mysqli_query($conn, $sql)) {
    header("Location:viewjob.php?er=3");
} else {
    header("Location:viewjob.php?er=2");
}



