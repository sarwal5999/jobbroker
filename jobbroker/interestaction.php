<?php
include "connection.php";
$id = $_REQUEST['q'];
$qury = "select * from student_interest inner join subcategory on subcategory.sc_id=student_interest.subcatid inner join category on category.c_id=subcategory.c_id where studentid='$id'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    ?>
    <?php
    $k = 0;
    while ($category = mysqli_fetch_array($result)) {
        $k++;
        ?>
        <tr>
            <td><?php echo $k; ?></td>
            <td><?php echo $category['sc_name']; ?></td>
            <td><?php echo $category['c_name']; ?></td>
        </tr>
        <?php
    }
    ?>
    <?php
} else {
    ?>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="alert alert-danger">No Data Found <span class="close" data-dismiss="alert">&times;</span></div>
        </div>
    </div>
    <?php
}
