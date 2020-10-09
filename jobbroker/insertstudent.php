<?php
ob_start();
include "connection.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$ti = $_POST['ti'];
$coursecode = $_POST['coursecode'];
$coursename = $_POST['coursename'];
$cs = $_POST['cs'];
$cc = $_POST['cc'];
$qt = $_POST['qt'];
$es = $_POST['es'];
$skill = $_POST['skill'];
$description = $_POST['description'];
$ethnicity = $_POST['ethnicity'];
$license = $_POST['license'];
$location = $_POST['location'];
$password = $_POST['password'];

$cv = $_FILES["cv"]["tmp_name"];
$photo = $_FILES["photo"]["tmp_name"];
$path = '';
$path2 = '';
$error = "";
if ($photo != "") {
    $filename = $_FILES["photo"]["name"];
    $ext = pathinfo(strtolower($filename), PATHINFO_EXTENSION);
    if (round($_FILES["photo"]["size"] / 1024) > 500) {
        $error = "Image size must be less than 100 kb";
        header("location:studentsignup.php?er=3");
    } else {
        $path = "profilepic/$filename";
        move_uploaded_file($photo, $path);
    }
}
if ($cv != "") {
    $filename2 = $_FILES["cv"]["name"];
    $ext = pathinfo(strtolower($filename2), PATHINFO_EXTENSION);
    if (round($_FILES["cv"]["size"] / 1024) > 500) {
        $error = "Image size must be less than 100 kb";
        header("location:studentsignup.php?er=4");
    } else {
        $path2 = "cv/$filename2";
        move_uploaded_file($cv, $path2);
    }
}

$s = "select * from student where email='$email'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:studentsignup.php?er=0");
} else {
    $sql = "INSERT INTO `student`(`studentid`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `dob`, `tertiaryinstitute`, `coursestarted`, `coursecompleted`, `coursecode`, `coursename`, `qualificationtitle`, `enrolmentstatus`, `cv`, `skillset`, `photo`, `description`, `location`, `ethnicity`,`licensetype`, `otp`, `password`) VALUES(null ,'$fname','$lname','$email','$mobile','$gender','$dob','$ti','$cs','$cc','$coursecode','$coursename','$qt','$es','$path2','$skill','$path','$description','$location','$ethnicity','$license','','$password')";
    if (mysqli_query($conn, $sql)) {
        header("Location:studentsignup.php?er=1");
    } else {
        header("Location:studentsignup.php?er=2");
    }
}
