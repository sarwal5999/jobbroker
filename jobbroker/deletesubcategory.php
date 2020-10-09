<?php
include_once 'connection.php';

$catname = $_REQUEST["catname"];
$qury = "delete from subcategory where sc_id ='$catname'";
if (mysqli_query($conn, $qury)) {
    header("location:viewsubcategory.php?er=0");
} else {
    header("location:viewsubcategory.php?er=1");
}
