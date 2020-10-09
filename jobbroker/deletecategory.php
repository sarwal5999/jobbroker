<?php
include_once 'connection.php';

$catname = $_REQUEST["catname"];
$qury = "delete from category where c_id ='$catname'";
if (mysqli_query($conn, $qury)) {
    header("location:showcategory.php?er=0");
} else {
    header("location:showcategory.php?er=1");
}
