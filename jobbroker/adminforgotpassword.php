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
include_once 'publicheader.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <h2>Try to find out your account</h2>
    </div>
    <form action="adminforgotpasswordaction.php" method="post" id="form1">
        <div class="offset-2 col-sm-8 row">
            <label for="">Enter a valid email address so that we can help you recover your
                account password</label>
            <input type="email" name="email" data-rule-required="true" data-rule-email="true" class="form-control">
        </div>
        <div class="row mt-3 justify-content-center">
            <button class="btn btn-outline-dark" type="submit">Send Otp</button>
        </div>
    </form>
    <br>
    <br>
    <br>
    <?php
    if (isset($_GET["er"])) {
        if ($_GET["er"] == 1) {
            echo "<div class='alert alert-danger'>invalid email</div>";
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
