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
$id = $_REQUEST['q'];
$sql = "select * from joblist where j_id='$id'";
$result3 = mysqli_query($conn, $sql);
$row2 = mysqli_fetch_array($result3);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Job</h1>
        </div>
    </div>
    <form action="updatejob.php" method="post" id="form1">

        <div class="form-group row">
            <div class="col-md-6 banf">
                <label>Job Sub Category</label>
                <select data-rule-required="true" id="scid" name="scid" class="form-control">
                    <option value="">Select Sub Category</option>
                    <?php
                    $s2 = "select * from subcategory";
                    $result2 = mysqli_query($conn, $s2);
                    while ($row3 = mysqli_fetch_array($result2)) {
                        ?>
                        <option <?php if ($row2['sc_id']==$row3['sc_id']){
                            echo "selected";
                        }?> value="<?php echo $row3['sc_id']; ?>"><?php echo $row3['sc_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-sm-6">
                <label>Job Employer</label>
                <select data-rule-required="true" id="eid" name="eid" class="form-control">
                    <option value="">Select Employer</option>
                    <?php
                    $s2 = "select * from employer";
                    $result2 = mysqli_query($conn, $s2);
                    while ($row = mysqli_fetch_array($result2)) {
                        ?>
                        <option <?php if ($row2['e_id']==$row['e_id']){
                            echo "selected";
                        }?> value="<?php echo $row['e_id']; ?>"><?php echo $row['e_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
                <label>Job Name</label>
                <input type="text" name="name" class="form-control" data-rule-required="true" id="name"
                       placeholder="Enter Job Name" value="<?php echo $row2['j_name'];?>">
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label>Start Date</label>
                <input type="date" name="start" value="<?php echo $row2['j_startdate'];?>" class="form-control" data-rule-required="true">
            </div>
            <div class="col-sm-6">
                <label>End Date</label>
                <input type="date" name="end" value="<?php echo $row2['enddate'];?>" class="form-control" data-rule-required="true">
            </div>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <textarea name="location" rows="5" class="form-control" data-rule-required="true" id="location"
                      placeholder="Enter Location"><?php echo $row2['j_location'];?></textarea>
        </div>
        <div class="form-group text-center">
            <input type="hidden" name="jid" value="<?php echo $row2['j_id'];?>">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
</div>

<?php
include_once "footer.php";
?>
</body>
</html><?php
