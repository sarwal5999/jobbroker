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
include_once "adminheader.php";
$email = $_REQUEST['q'];
$sql = "select * from admin where email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Admin</h1>
        </div>
    </div>
    <form action="updateAdmin.php" method="post" id="form1">
        <div class="form-group row">
            <label for="username" class="col-md-2">Email</label>
            <div class="col-md-10">
                <input type="email" name="email" readonly class="form-control" data-rule-required="true" data-rule-email="true"
                       id="username" value="<?php echo $row['email']; ?>"
                       placeholder="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="first" class="col-md-2">First Name</label>
            <div class="col-md-10">
                <input type="text" name="first" class="form-control" data-rule-required="true" id="first"
                       placeholder="First Name" value="<?php echo $row['firstname']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="last" class="col-md-2">Last Name</label>
            <div class="col-md-10">
                <input type="text" name="last" class="form-control" data-rule-required="true" id="last"
                       placeholder="Last Name" value="<?php echo $row['lastname']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="dob" class="col-md-2">Date of Birth</label>
            <div class="col-md-10">
                <input type="date" name="dob" class="form-control" value="<?php echo $row['dob']; ?>" data-rule-required="true" id="dob"
                       placeholder="Date of Birth">
            </div>
        </div>
        <div class="form-group row">
            <label for="dob" class="col-md-2">Gender</label>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="radio" name="gender" class="" <?php if ($row['gender']=="Male"){
                            echo "checked";
                        }?> value="Male" id="male">&nbsp; Male
                    </div>
                    <div class="col-sm-6">
                        <input type="radio" name="gender" <?php if ($row['gender']=="Female"){
                            echo "checked";
                        }?> value="Female" id="female">&nbsp; Female
                    </div>

                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="mobile" class="col-md-2">Mobile</label>
            <div class="col-md-10">
                <input type="tel" name="mobile" class="form-control" data-rule-required="true" data-rule-number="true"
                       maxlength="10" minlength="10" id="mobile" value="<?php echo $row['phone']; ?>"
                       placeholder="Mobile">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-md-2">Address</label>
            <div class="col-md-10">
                <textarea name="address" rows="5" class="form-control" data-rule-required="true" id="address"
                          placeholder="Address"><?php echo $row['address']; ?></textarea>
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
include_once 'footer.php';
?>

</body>
</html><?php
