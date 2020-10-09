<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "headerfiles.php";
    ?>
</head>
<body>
<?php
include "adminheader.php";
?>
<div class="container-fluid">
    <div class="col-md-10">
        <?php
        if (isset($_REQUEST['er'])) {
            $val = $_REQUEST['er'];
            if ($val == 0) {
                ?>
                <div class="alert alert-danger"><b>Fail! </b> Employer deletion failed
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 1) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Employer deleted Successfully
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 3) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Employer Updated Successfully
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 2) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Employer Updation Failed
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">View Employers</h1>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th>Sr. no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile no.</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <?php
            $k = 1;
            $s = "select * from employer";
            $result = mysqli_query($conn, $s);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $k++; ?></td>
                    <td><?php echo $row['e_name']; ?></td>
                    <td><?php echo $row['e_email']; ?></td>
                    <td><?php echo $row['e_phone']; ?></td>
                    <td><a href="editemployer.php?q=<?php echo $row['e_id'] ?>"><i class="fa fa-edit"></i></a></td>
                    <td><a class="text-danger" onclick="return confirm('Are you Sure you want to Delete?')"
                           href="deleteemployer.php?q=<?php echo $row['e_id'] ?>"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
<?php
include_once "footer.php";
?>
</body>
</html>
