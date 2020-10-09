<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include_once 'headerfiles.php';
    ?>
</head>
<body>
<?php
ob_start();
include_once 'publicheader.php';
include "connection.php";
@session_start();
if (!isset($_SESSION["admin1"])) {
    header("location:adminlogin.php");
} else {
    $username = $_SESSION["admin1"];
}
?>
<div class="container">
    <form action="studentupdatenewpassword.php" method="post" id="form1">
        <div class="form-group row mt-3">
            <label for="newpassword" class="col-md-2">New Password</label>
            <div class="col-md-10">
                <input type="password" name="newpassword" class="form-control" data-rule-required="true"
                       id="newpassword"
                       placeholder="new password">
            </div>
        </div>
        <div class="form-group row">
            <label for="conpassword" class="col-md-2">Confirm Password</label>
            <div class="col-md-10">
                <input type="password" name="conpassword" class="form-control" data-rule-required="true"
                       data-rule-equalTo="#newpassword"
                       id="conpassword"
                       placeholder="confirm password">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
<?php
if (isset($_GET["er"])) {
    if ($_GET["er"] == 2) {
        echo "<div class=\"alert alert-info\"><b>Success! </b>You have completed half procedure now create a new strong password
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        </div>";
    } else {
        echo "<div class='alert alert-danger'>Try Again Later</div>";
    }
}
?>
<?php
include_once 'footer.php';
?>
</body>
</html>
<?php
