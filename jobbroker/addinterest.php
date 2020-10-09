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
            <h1 class="text-center">Add Your Interests Here</h1>
        </div>
    </div>
    <form action="insertinterest.php" method="post" id="form1">
        <div class="form-group row">
            <label class="col-md-2">Select your Interests</label>
            <div class="col-md-10">
                <select name="scid" class="form-control"
                        data-rule-required="true">
                    <option value="">Select Intetests</option>
                    <?php
                    $s = "select * from subcategory inner join category on subcategory.c_id=category.c_id";
                    $result = mysqli_query($conn, $s);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $row['sc_id']; ?>"><?php echo $row['sc_name']; ?>
                            &nbsp; (&nbsp;<?php echo $row['c_name']; ?>&nbsp;)
                        </option>
                        <?php
                    }
                    ?>
                </select>
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
                        <div class="alert alert-danger"><b>Fail! </b>Interests Already Exists
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 1) {
                        ?>
                        <div class="alert alert-success"><b>Success! </b> Interests Added Successfully
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 2) {
                        ?>
                        <div class="alert alert-success"><b>Warning! </b> Failed to add Interests
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

