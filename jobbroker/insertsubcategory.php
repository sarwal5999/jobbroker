<?php
include_once 'connection.php';

$categoryname = $_POST["categoryname"];
$subcategoryname = $_POST["subcategoryname"];
$qury = "select * from subcategory where sc_name='$subcategoryname' and c_id='$categoryname'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    header("Location:addsubcategory.php?er=0");
} else {
    $qury = "INSERT INTO `subcategory`(`sc_id`, `sc_name`, `c_id`) VALUES (null ,'$subcategoryname','$categoryname')";
    echo $qury;
    if (mysqli_query($conn, $qury)) {
        echo "Insert Success";
        header("Location:addsubcategory.php?er=1");
    } else {
        echo "Insert Failed";
        header("Location:addsubcategory.php?er=2");
    }
}
