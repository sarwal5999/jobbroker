<?php
include_once 'connection.php';
session_start();

$email = $_SESSION["admin1"];
$a = $_POST["1"];
$b = $_POST["2"];
$c = $_POST["3"];
$d = $_POST["4"];
$e = $_POST["5"];
$f = $_POST["6"];
$otp = $a . $b . $c . $d . $e . $f;
//echo $otp;
$sql = "select otp from student where email='$email' and otp='$otp'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    $sql1 = "UPDATE `student` SET `otp`=null WHERE `email`='$email'";
    if (mysqli_query($conn, $sql1)) {
        header("Location:student_create_new_password.php?er=2");
    } else {
        header("Location:studentforgotpassword.php?er=0");
    }
//    echo $sql1;
} else {
    header("Location:studententerotp.php?er=1");

}
