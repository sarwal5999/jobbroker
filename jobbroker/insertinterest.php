<?php
ob_start();
@session_start();
include_once 'connection.php';
include_once 'studentheader.php';

$scid = $_POST['scid'];
$studentid=$studentrow[0];

$s = "select * from student_interest where studentid='$studentid' and subcatid='$scid'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:addinterest.php?er=0");
} else {
    $sql = "INSERT INTO `student_interest`(`si_id`, `subcatid`, `studentid`) VALUES (null ,'$scid','$studentid')";
    if (mysqli_query($conn, $sql)) {
        header("Location:addinterest.php?er=1");
    } else {
        header("Location:addinterest.php?er=2");
    }
}
