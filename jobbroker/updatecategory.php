<?php
include_once 'connection.php';
$cid = $_POST["cid"];
$catname = $_POST["categoryname"];

$qury = "UPDATE `category` SET `c_name`='$catname' WHERE `c_id`='$cid'";
echo $qury;
if (mysqli_query($conn, $qury)) {
    echo "Update Success";
    header("location:showcategory.php?er=2");
} else {
    echo "Update Failed";
    header("location:showcategory.php?er=3");
}
