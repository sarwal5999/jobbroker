<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include 'headerfiles.php';
    include_once 'connection.php';
    ?>
</head>
<body class="home">
<div id="wrapper">
    <?php
    include_once 'adminheader.php';
    ?>
    <div class="container">
        <div class="col-md-6 offset-3">
            <?php
            if (isset($_REQUEST['er'])) {
                $val = $_REQUEST['er'];
                if ($val == 1) {
                    ?>
                    <div class="alert alert-danger"><b>Fail! </b>  Category deletion failed
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 0) {
                    ?>
                    <div class="alert alert-success"><b>Success! </b>  Category deleted Successfully
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 2) {
                    ?>
                    <div class="alert alert-success"><b>Success! </b>  Category Updated Successfully
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 3) {
                    ?>
                    <div class="alert alert-success"><b>Success! </b>  Category Updation Failed
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <div class="row justify-content-center form-group">
            <h2>All Categories</h2>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Sr no.</th>
                <th>Category Name</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $k = 0;
            $qury = "select * from category";
            $result = mysqli_query($conn, $qury);
            while ($category = mysqli_fetch_array($result)) {
                $k++;
                ?>
                <tr>
                    <td><?php echo $k ?></td>
                    <td><?php echo $category[1]; ?></td>
                    <td><a onclick="return confirm('Are you Sure you want to Delete?')"
                           href="deletecategory.php?catname=<?php echo $category[0]; ?>"><i class="fa fa-trash"></i></a>
                    </td>
                    <td><a href="editcategory.php?catname=<?php echo $category[0]; ?>"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                <?php

            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</div>

</body>
</html>
<?php
