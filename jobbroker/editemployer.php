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
$sql = "select * from employer where e_id='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Employer</h1>
        </div>
    </div>
    <form action="updateemployer.php" method="post" id="form1">
        <div class="form-group row">
            <label for="first" class="col-md-2">Name</label>
            <div class="col-md-10">
                <input type="text" name="name" class="form-control" data-rule-required="true" id="first"
                       placeholder="Name" value="<?php echo $row['e_name']; ?>">
                <input type="hidden" name="id"
                       value="<?php echo $row['e_id']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2">Email</label>
            <div class="col-md-10">
                <input type="email" name="email" class="form-control" data-rule-required="true"
                       data-rule-email="true"
                       id="username" value="<?php echo $row['e_email']; ?>"
                       placeholder="email">
            </div>
        </div>


        <div class="form-group row">
            <label for="mobile" class="col-md-2">Mobile</label>
            <div class="col-md-10">
                <input type="tel" name="mobile" class="form-control" data-rule-required="true" data-rule-number="true"
                       maxlength="10" minlength="10" id="mobile" value="<?php echo $row['e_phone']; ?>"
                       placeholder="Mobile">
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
