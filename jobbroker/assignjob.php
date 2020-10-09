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
include_once "adminheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Allot Job Here</h1>
        </div>
    </div>
    <form action="assignjobaction.php" method="post" id="form1">
        <div class="form-group row">
            <label class="col-md-2">Select Job</label>
            <div class="col-md-10">
                <select name="scid" class="form-control"
                        data-rule-required="true">
                    <option value="">Select Job</option>
                    <?php
                    if (isset($_GET['q'])){
                        $sid=$_GET['q'];
                    }
                    $s = "select * from joblist inner join subcategory on subcategory.sc_id=joblist.sc_id";
                    $result = mysqli_query($conn, $s);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $row['j_id']; ?>"><?php echo $row['j_name']; ?>
                            &nbsp; (&nbsp;<?php echo $row['sc_name']; ?>&nbsp;)
                        </option>
                        <?php
                    }
                    ?>
                </select>
                <input type="hidden" value="<?php echo $sid;?>" name="sid" id="sid">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Select Date</label>
            <div class="col-md-10">
                <input name="date" type="date" class="form-control"
                        data-rule-required="true">
                <input type="hidden" value="<?php echo $sid; ?>" name="sid" id="sid">
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
                        <div class="alert alert-danger"><b>Fail! </b>Job Already Alloted
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 1) {
                        ?>
                        <div class="alert alert-success"><b>Success! </b> Job Alloted Successfully
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 2) {
                        ?>
                        <div class="alert alert-success"><b>Warning! </b> Failed to allot Job
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
