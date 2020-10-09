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
include_once "connection.php";
@session_start();
if (!isset($_SESSION["admin1"])) {
    header("location:studentlogin.php");
} else {
    $username = $_SESSION["admin1"];
}
?>
<div class="container">
    <form action="studententerotpaction.php" method="post" id="form1">
        <div class="row justify-content-center">
            <h3>We have Sent an 6-digit otp on the email you have entered </h3>
        </div>
        <div class="col-sm-6 offset-3">
            <div class="row">
                <div class="col-sm-2">
                    <input style="border-style: inset" type="text" class="form-control" autofocus name="1"
                           id="1"
                           data-rule-required="true"
                           maxlength="1" minlength="1">
                </div>
                <div class="col-sm-2">
                    <input style="border-style: inset" type="text" class="form-control" name="2"
                           id="2"
                           data-rule-required="true"
                           maxlength="1" minlength="1">
                </div>
                <div class="col-sm-2">
                    <input style="border-style: inset" type="text" class="form-control" name="3"
                           id="3"
                           data-rule-required="true"
                           maxlength="1" minlength="1">
                </div>
                <div class="col-sm-2">
                    <input style="border-style: inset" type="text" class="form-control" name="4"
                           id="4"
                           data-rule-required="true"
                           maxlength="1" minlength="1">
                </div>
                <div class="col-sm-2">
                    <input style="border-style: inset" type="text" class="form-control" name="5"
                           id="5"
                           data-rule-required="true"
                           maxlength="1" minlength="1">
                </div>
                <div class="col-sm-2">
                    <input style="border-style: inset" type="text" class="form-control" name="6"
                           id="6"
                           data-rule-required="true"
                           maxlength="1" minlength="1">
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
        </div>
    </form>
    <?php
    if (isset($_GET["er"])) {
        if ($_GET["er"] == 1) {
            echo "<div class='alert alert-danger'>invalid otp </div>";
        } elseif ($_GET["er"] == 2) {
            echo "<div class='alert alert-danger'>Otp sent successfully</div>";
        } else {
            echo "<div class='alert alert-danger'>Try Again Later</div>";
        }
    }
    ?>
</div>
<?php
include_once 'footer.php';
?>

</body>
</html>
<?php
