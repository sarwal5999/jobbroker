v<?php
ob_start();
include_once 'studentheader.php';
$username = $_POST["email"];
$oldpassword = $_POST["oldpassword"];
$newpassword = $_POST["newpassword"];
$passwordold = "select * from student where email='$username'";
$result = mysqli_query($conn, $passwordold);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if ($row['password'] == $oldpassword) {
        $sql = "UPDATE `student` SET password='$newpassword' WHERE email='$username'";
        $result2 = mysqli_query($conn, $sql);
        echo 0;
        header("Location:studentchangepassword.php?er=0");
    }
    else{
        echo 1;
        header("Location:studentchangepassword.php?er=1");
    }
} else {
    echo 2;
    header("Location:studentchangepassword.php?er=2");
}

