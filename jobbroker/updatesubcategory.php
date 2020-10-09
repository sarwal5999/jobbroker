<?php
include_once 'connection.php';
$scid = $_POST["scid"];
$catname = $_POST["categoryname"];
$subcatname = $_POST["subcategoryname"];

$qury = "UPDATE `subcategory` SET `sc_name`='$subcatname',`c_id`='$catname' WHERE `sc_id`='$scid'";
echo $qury;
if (mysqli_query($conn, $qury)) {
    echo "Update Success";
    header("location:viewsubcategory.php?er=2");
} else {
    echo "Update Failed";
    header("location:viewsubcategory.php?er=3");
}
