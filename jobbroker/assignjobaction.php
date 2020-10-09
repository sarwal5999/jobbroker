<?php
ob_start();
@session_start();
include_once 'connection.php';
include_once 'adminheader.php';

$date = $_POST['date'];
$scid = $_POST['scid'];
$studentid=$_POST['sid'];

$s = "select * from job_placement where si_id='$studentid' and jl_id='$scid'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:viewstudent.php?er=4");
} else {
    $sql = "INSERT INTO `job_placement`(`jp_id`, `jl_id`, `si_id`,`date`) VALUES (null ,'$scid','$studentid','$date')";
    if (mysqli_query($conn, $sql)) {
        $update="update joblist set status='Closed' where j_id='$scid'";
        mysqli_query($conn,$update);
        header("Location:viewstudent.php?er=5");
    } else {
        header("Location:viewstudent.php?er=6");
    }
}
