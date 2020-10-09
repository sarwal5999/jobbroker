<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "publicheader.php";
?>
<div class="container">
    <div class="row justify-content-around mb-4">
        <h1 class="">Student Login</h1>
    </div>
    <div class="card-body mx-auto col-sm-6">
        <!--                <form action="checklogin.php" method="post" id="form1">-->
        <form id="form1" action="studentchecklogin.php" method="post">
            <div class="form-group row">
                <label for="username" class="col-md-2">Email</label>
                <div class="col-md-10">
                    <input type="email" name="email" class="form-control" data-rule-required="true"
                           data-rule-email="true"
                           id="username"
                           placeholder="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-md-2">Password</label>
                <div class="col-md-10">
                    <input type="password" name="password" class="form-control" data-rule-required="true"
                           id="password"
                           placeholder="password">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6 text-center">
                    <input type="submit" value="Log in" class="btn btn-primary">
                </div>
                <div class="form-group col-sm-6 text-center">
                    <a href="studentforgotpassword.php">Forgot Password ?</a>
                </div>

            </div>
        </form>
        <div id="er"></div>
        <?php
        if (isset($_GET["er"])) {
            if ($_GET["er"] == 1) {
                ?>
                <div class="alert alert-danger"><b>Fail! </b> Invalid Credentials
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php

            }
            if ($_GET["er"] == 5) {
                ?>
                <div class="alert alert-primary"><b>Success! </b>Login with new password
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php

            }
        }
        ?>
    </div>
</div>

<?php
include_once "footer.php";
?>

</body>
</html>
<?php
