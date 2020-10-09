<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    @session_start();
    include_once 'headerfiles.php';
    ?>
</head>
<body>
<?php
include_once 'studentheader.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <h3>Welcome <strong><?php echo $studentrow['firstname']; ?></strong> to Student Panel</h3>
    </div>
</div>
<?php
include_once "footer.php";
?>
</body>
</html>
<?php

