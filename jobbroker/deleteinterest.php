<?php
include_once 'connection.php';

$catname = $_REQUEST["catname"];
$qury = "delete from student_interest where si_id ='$catname'";
if (mysqli_query($conn, $qury)) {
    header("location:viewinterest.php?er=0");
} else {
    header("location:viewinterest.php?er=1");
}
