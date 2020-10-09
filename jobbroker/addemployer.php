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
<body class="boxed_wrapper">
<?php
include_once "adminheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Add Employer</h1>
        </div>
    </div>
    <form action="insertemployer.php" method="post" id="form1">
        <div class="form-group row">
            <label for="username" class="col-md-2">Email</label>
            <div class="col-md-10">
                <input type="email" name="email" class="form-control" data-rule-required="true" data-rule-email="true"
                       id="username"
                       placeholder="Enter Email">
            </div>
        </div>

        <div class="form-group row">
            <label for="first" class="col-md-2">Name</label>
            <div class="col-md-10">
                <input type="text" name="name" class="form-control" data-rule-required="true" id="first"
                       placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group row">
            <label for="mobile" class="col-md-2">Mobile</label>
            <div class="col-md-10">
                <input type="tel" name="mobile" class="form-control" data-rule-required="true" data-rule-number="true"
                       maxlength="10" minlength="10" id="mobile"
                       placeholder="Enter Mobile">
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
                    if ($val == 0) {
                        ?>
                        <div class="alert alert-danger"><b>Fail! </b> Employer already Exist
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 1) {
                        ?>
                        <div class="alert alert-success"><b>Success! </b> Employer added Successfully
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 2) {
                        ?>
                        <div class="alert alert-success"><b>Fail! </b> Failed to add Employer
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
</html><?php
