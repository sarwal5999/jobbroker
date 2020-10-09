<?php
include "connection.php";
$id = $_REQUEST['q'];
$qury = "select * from subcategory where c_id='$id'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    $k = 0;
    while ($category = mysqli_fetch_array($result)) {
        $k++;
        ?>
        <option value="<?php echo $category['sc_id']; ?>"><?php echo $category['sc_name']; ?></option>
        <?php
    }
} else {
    ?>
    <option value="">Select Subcategory</option>
    <?php
}
?>
