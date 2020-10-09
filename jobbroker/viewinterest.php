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
<div id="wrapper"><?php
    include_once 'studentheader.php';
    ?>
    <div class="container">
        <div class="col-md-6 offset-3">
            <?php
            if (isset($_REQUEST['er'])) {
                $val = $_REQUEST['er'];
                if ($val == 1) {
                    ?>
                    <div class="alert alert-danger"><b>Fail! </b> Interest deletion failed
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 0) {
                    ?>
                    <div class="alert alert-success"><b>Success! </b> Interest deleted Successfully
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <div class="row justify-content-center form-group">
            <h2>My Interests</h2>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Sr no.</th>
                <th>Interest Name</th>
                <th>Category Name</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $k = 0;
            $qury = "select * from student_interest inner join subcategory on subcategory.sc_id=student_interest.subcatid inner join category on category.c_id=subcategory.c_id where studentid='$studentrow[0]'";
            $result = mysqli_query($conn, $qury);
            while ($category = mysqli_fetch_array($result)) {
                $k++;
                ?>
                <tr>
                    <td><?php echo $k ?></td>
                    <td><?php echo $category['sc_name']; ?></td>
                    <td><?php echo $category['c_name']; ?></td>
                    <td><a onclick="return confirm('Are you Sure you want to Delete?')"
                           href="deleteinterest.php?catname=<?php echo $category[0]; ?>"><i class="fa fa-trash"></i></a>
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
