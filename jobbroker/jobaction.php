<?php
include "connection.php";
$id = $_REQUEST['q'];
$qury = "select * from student inner join job_placement on job_placement.si_id=studentid where jl_id='$id'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    ?>
    <?php
    $k = 0;
    while ($row = mysqli_fetch_array($result)) {
        $k++;
        ?>
        <tr>
            <td><?php echo $k++; ?></td>
            <td><?php echo $row['studentid']; ?></td>
            <td><img style="height: 100px;width: 100px" src="<?php echo $row['photo']; ?>" alt=""></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['ethnicity']; ?></td>
            <td><?php echo $row['licensetype']; ?></td>
            <td><?php echo $row['tertiaryinstitute']; ?></td>
            <td><?php echo $row['coursestarted']; ?></td>
            <td><?php echo $row['coursecompleted']; ?></td>
            <td><?php echo $row['coursecode']; ?></td>
            <td><?php echo $row['coursename']; ?></td>
            <td><?php echo $row['qualificationtitle']; ?></td>
            <td><?php echo $row['enrolmentstatus']; ?></td>
            <td><?php echo $row['skillset']; ?></td>
            <td><a href="<?php echo $row['cv']; ?>"><i class="fa fa-eye"></i></a></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['description']; ?></td>
            </td>
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
