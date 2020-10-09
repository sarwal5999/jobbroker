<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "studentheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Student Change Password</h1>
        </div>
    </div>
    <form action="studentupdatepassword.php" method="post" id="form1">
        <div class="form-group row">
            <label for="username" class="col-md-2">Email</label>
            <div class="col-md-10">
                <input type="text" name="email" value="<?php echo $student; ?>" readonly class="form-control"
                       data-rule-required="true" id="email"
                       placeholder="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="oldpassword" class="col-md-2">Old Password</label>
            <div class="col-md-10">
                <input type="password" name="oldpassword" class="form-control" data-rule-required="true"
                       id="oldpassword"
                       placeholder="old password">
            </div>
        </div>
        <div class="form-group row">
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
        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <?php
                if (isset($_REQUEST['er'])) {
                    $val = $_REQUEST['er'];
                    if ($val == 1) {
                        ?>
                        <div class="alert alert-danger"><b>Fail! </b>Old password is incorrect
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 0) {
                        ?>
                        <div class="alert alert-success"><b>Success! </b> Password changed Successfully
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 2) {
                        ?>
                        <div class="alert alert-success"><b>Warning! </b> Email does not exist
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </form>

</div>

<?php
include_once "footer.php";
?>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Lab-4_4
 * Date: 14-03-2020
 * Time: 12:13
 */
