<?php
include_once 'connection.php';

$categoryname = $_POST["categoryname"];
$qury = "select * from category where c_name='$categoryname'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    header("Location:addcategory.php?er=0");
} else {
    $qury = "INSERT INTO `category`(`c_id`, `c_name`) VALUES (null ,'$categoryname')";
    echo $qury;
    if (mysqli_query($conn, $qury)) {
        echo "Insert Success";
        header("Location:addcategory.php?er=1");
    } else {
        echo "Insert Failed";
        header("Location:addcategory.php?er=2");
    }
}
