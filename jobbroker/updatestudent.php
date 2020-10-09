<?php
ob_start();
include "connection.php";
include_once 'studentheader.php';

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
        header("location:editstudent.php?er=3");
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
        header("location:editstudent.php?er=4");
    } else {
        $path2 = "cv/$filename2";
        move_uploaded_file($cv, $path2);
    }
}


if ($cv != "" and $photo != "") {
    $sql = "UPDATE `student` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`mobile`='$mobile',`gender`='$gender',`dob`='$dob',`tertiaryinstitute`='$ti',`coursestarted`='$cs',`coursecompleted`='$cc',`coursecode`='$coursecode',`coursename`='$coursename',`qualificationtitle`='$qt',`enrolmentstatus`='$es',`cv`='$path2',`skillset`='$skill',`photo`='$path',`description`='$description',`location`='$location',`ethnicity`='$ethnicity',`licensetype`='$license' WHERE `studentid`='$studentrow[0]'";
} elseif ($photo != "") {
    $sql = "UPDATE `student` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`mobile`='$mobile',`gender`='$gender',`dob`='$dob',`tertiaryinstitute`='$ti',`coursestarted`='$cs',`coursecompleted`='$cc',`coursecode`='$coursecode',`coursename`='$coursename',`qualificationtitle`='$qt',`enrolmentstatus`='$es',`skillset`='$skill',`photo`='$path',`description`='$description',`location`='$location',`ethnicity`='$ethnicity',`licensetype`='$license' WHERE `studentid`='$studentrow[0]'";
} elseif ($cv != "") {
    $sql = "UPDATE `student` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`mobile`='$mobile',`gender`='$gender',`dob`='$dob',`tertiaryinstitute`='$ti',`coursestarted`='$cs',`coursecompleted`='$cc',`coursecode`='$coursecode',`coursename`='$coursename',`qualificationtitle`='$qt',`enrolmentstatus`='$es',`cv`='$path2',`skillset`='$skill',`description`='$description',`location`='$location',`ethnicity`='$ethnicity',`licensetype`='$license' WHERE `studentid`='$studentrow[0]'";
} else {
    $sql = "UPDATE `student` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`mobile`='$mobile',`gender`='$gender',`dob`='$dob',`tertiaryinstitute`='$ti',`coursestarted`='$cs',`coursecompleted`='$cc',`coursecode`='$coursecode',`coursename`='$coursename',`qualificationtitle`='$qt',`enrolmentstatus`='$es',`skillset`='$skill',`description`='$description',`location`='$location',`ethnicity`='$ethnicity',`licensetype`='$license' WHERE `studentid`='$studentrow[0]'";
}
if (mysqli_query($conn, $sql)) {
    header("Location:editstudent.php?er=1");
} else {
    header("Location:editstudent.php?er=2");
}
