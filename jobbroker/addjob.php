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
            <h1 class="text-center">Add Job</h1>
        </div>
    </div>
    <form action="insertjob.php" method="post" id="form1">

        <div class="form-group row">
            <div class="col-md-6 banf">
                <label>Job Category</label>
                <select data-rule-required="true" onchange="showsubcategory2(this.value)" class="form-control" id="country12" name="category">
                    <option value="">Select Category</option>
                    <?php
                    $s = "select * from category";
                    $result = mysqli_query($conn, $s);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $row['c_id']; ?>"><?php echo $row['c_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6 banf">
                <label>Job Sub Category</label>
                <select data-rule-required="true" id="scid" name="scid" class="form-control">
                    <option value="">Select Sub Category</option>
                    <?php
                    $s2 = "select * from subcategory";
                    $result2 = mysqli_query($conn, $s2);
                    while ($row = mysqli_fetch_array($result2)) {
                        ?>
                        <option value="<?php echo $row['sc_id']; ?>"><?php echo $row['sc_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label>Job Employer</label>
                <select data-rule-required="true" id="eid" name="eid" class="form-control">
                    <option value="">Select Employer</option>
                    <?php
                    $s2 = "select * from employer";
                    $result2 = mysqli_query($conn, $s2);
                    while ($row = mysqli_fetch_array($result2)) {
                        ?>
                        <option value="<?php echo $row['e_id']; ?>"><?php echo $row['e_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-sm-6">
                <label>Job Name</label>
                <input type="text" name="name" class="form-control" data-rule-required="true" id="name"
                       placeholder="Enter Job Name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label>Start Date</label>
                <input type="date" name="start" class="form-control" data-rule-required="true">
            </div>
            <div class="col-sm-6">
                <label>End Date</label>
                <input type="date" name="end" class="form-control" data-rule-required="true">
            </div>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <textarea name="location" rows="5" class="form-control" data-rule-required="true" id="location"
                      placeholder="Enter Location"></textarea>
        </div>
        <div class="form-group text-center">
            <input type="submit" class="btn btn-primary">
        </div>
        <div class="form-group">

                <?php
                if (isset($_REQUEST['er'])) {
                    $val = $_REQUEST['er'];
                    if ($val == 0) {
                        ?>
                        <div class="alert alert-danger"><b>Fail! </b> Job already Exist
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 1) {
                        ?>
                        <div class="alert alert-success"><b>Success! </b> Job added Successfully
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 2) {
                        ?>
                        <div class="alert alert-success"><b>Success! </b>Failed to add Job .
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    }
                }
                ?>
        </div>
    </form>
</div>

<?php
include_once "footer.php";
?>
<script>

    function showsubcategory2(id) {
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var ar = this.responseText;
                document.getElementById("scid").innerHTML = ar;
            }
        };
        xml.open("GET", "getsubcategory.php?q=" + id, true);
        xml.send();
    }
</script>
</body>
</html><?php
