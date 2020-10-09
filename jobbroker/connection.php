<?php
$conn = mysqli_connect("localhost", "root", NULL, "jobbroker");
if (!$conn) {
    die("connection failed due to " . mysqli_connect_error());
}
