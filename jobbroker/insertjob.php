<?php
ob_start();
include "connection.php";

$name = $_POST['name'];
$location = $_POST['location'];
$start = $_POST['start'];
$end = $_POST['end'];
$eid = $_POST['eid'];
$scid = $_POST['scid'];

//$s = "select * from joblist where j_name='$name' and sc_id='$scid'";
//$result = mysqli_query($conn, $s);
//if (mysqli_num_rows($result) > 0) {
//    header("Location:addjob.php?er=0");
//} else {
$sql = "INSERT INTO `joblist`(`j_id`, `j_name`, `j_location`, `j_startdate`, `enddate`, `status`, `e_id`, `sc_id`) VALUES (NULL ,'$name','$location','$start','$end','Active','$eid','$scid')";
if (mysqli_query($conn, $sql)) {
    header("Location:addjob.php?er=1");
} else {
    header("Location:addjob.php?er=2");
}
//}
