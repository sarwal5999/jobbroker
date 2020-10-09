<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include_once 'headerfiles.php';
    ?>
</head>
<body>
<div id="wrapper">
    <?php
    include_once 'adminheader.php';
    $catname = $_REQUEST["catname"];
    $query = "select * from subcategory where sc_id='$catname'";
    $result = mysqli_query($conn, $query);
    $row2 = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <form action="updatesubcategory.php" method="post" id="form1">
            <div class="col-sm-8 offset-2">
                <div class="row justify-content-center">
                    <h1>Add Sub Category</h1>
                </div>
                <div class="row form-group col-md-8 justify-content-center offset-2">
                    <label for="categoryname" class="font-weight-bolder"><u>Category Name</u></label>
                    <select name="categoryname" id="categoryname" data-rule-required="true"
                            data-msg-required="Category name is mandatory"
                            class="form-control">
                        <option value="">Select Category</option>
                        <?php
                        $s = "select * from category";
                        $result = mysqli_query($conn, $s);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $row['c_id']; ?>" <?php
                            if ($row['c_id'] == $row2['c_id']) {
                                echo 'selected';
                            }
                            ?>><?php echo $row['c_name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="row form-group col-md-8 justify-content-center offset-2">
                    <label for="subcategoryname" class="font-weight-bolder"><u>Sub Category Name</u></label>
                    <input type="text" name="subcategoryname" id="subcategoryname" data-rule-required="true"
                           data-msg-required="Sub Category name is mandatory" placeholder="enter sub category name"
                           class="form-control" value="<?php echo $row2['sc_name']; ?>">
                </div>
                <div class="row form-group col-md-8 justify-content-center offset-2">
                    <input type="hidden" name="scid" value="<?php echo $row2['sc_id']; ?>">
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
