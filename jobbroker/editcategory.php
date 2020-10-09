<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once 'headerfiles.php';
    ?>
</head>
<body class="home">
<div id="wrapper">
    <?php
    include_once 'adminheader.php';
    include_once 'connection.php';
    $catname = $_REQUEST["catname"];
    $query = "select * from category where c_id='$catname'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    //print_r($row);
    ?>
    <div class="container">
        <form action="updatecategory.php" method="post" id="form1">
            <div class="offset-2 col-sm-8">
                <div class="row justify-content-center">
                    <h1>Edit Test Category</h1>
                </div>
                <div class="row form-group col-md-8 justify-content-center offset-2">
                    <label for="categoryname" class="font-weight-bolder"><u>Category Name</u></label>
                    <input type="text" name="categoryname" id="categoryname" data-rule-required="true"
                           data-msg-required="Category name is mandatory" placeholder="enter category name"
                           class="form-control"
                           value="<?php echo "$row[c_name]"; ?>">
                </div>

                <div class="row form-group col-md-8 justify-content-center offset-2">
                    <input type="hidden" name="cid" value="<?php echo $row['c_id'];?>">
                    <input type="submit" value="submit" class="btn btn-success">
                </div>
            </div>
        </form>

    </div>
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php
