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
                <div class="alert alert-danger"><b>Fail! </b> Job deletion failed
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 1) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Job deleted Successfully
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 3) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Job Updated Successfully
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 2) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Job Updation Failed
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">View Alloted Jobs</h1>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th>Sr.&nbsp;no</th>
                <th>Job&nbsp;Name</th>
                <th>Employer&nbsp;Name</th>
                <th>Location</th>
                <th>Start&nbsp;Date</th>
                <th>End&nbsp;Date</th>
                <th>Status</th>
                <th>Job&nbsp;Sub&nbsp;Category</th>
                <th>Job&nbsp;Category</th>
                <th>View&nbsp;Allotment</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <?php
            $k = 1;
            $s = "select * from joblist inner join employer on employer.e_id=joblist.e_id inner join subcategory on subcategory.sc_id=joblist.sc_id inner join category on category.c_id=subcategory.c_id where status='Closed'";
            $result = mysqli_query($conn, $s);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $k++; ?></td>
                    <td><?php echo $row['j_name']; ?></td>
                    <td><?php echo $row['e_name']; ?></td>
                    <td><?php echo $row['j_location']; ?></td>
                    <td><?php echo $row['j_startdate']; ?></td>
                    <td><?php echo $row['enddate']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['sc_name']; ?></td>
                    <td><?php echo $row['c_name']; ?></td>
                    <td><a onclick="showinterests('<?php echo $row['j_id']; ?>')"><i class="fa fa-info-circle"></i></a>
                    </td>
                    <td><a href="editjob.php?q=<?php echo $row['j_id'] ?>"><i class="fa fa-edit"></i></a></td>
                    <td><a class="text-danger" onclick="return confirm('Are you Sure you want to Delete?')"
                           href="deletejob.php?q=<?php echo $row['j_id'] ?>"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

<div class="modal" id="mymodal">
    <div class="modal-dialog modal-sm modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Student Detail</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sr. no</th>
                            <th>Photo</th>
                            <th>Student&nbsp;Id</th>
                            <th>First&nbsp;Name</th>
                            <th>Last&nbsp;Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>Date&nbsp;of&nbsp;Birth</th>
                            <th>Ethnicity</th>
                            <th>License</th>
                            <th>Tertiary&nbsp;Institute</th>
                            <th>Course&nbsp;Started</th>
                            <th>Course&nbsp;Completed</th>
                            <th>Course&nbsp;Code</th>
                            <th>Course&nbsp;Name</th>
                            <th>Qualification&nbsp;Title</th>
                            <th>Enrolment&nbsp;Status</th>
                            <th>Skill&nbsp;Set</th>
                            <th>CV</th>
                            <th>Location</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody id="myinterest"></tbody>
                    </table>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>

<script>

    function showinterests(id) {
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var ar = this.responseText;
                document.getElementById("myinterest").innerHTML = ar;
                $('#mymodal').modal("show");
            } else {
                document.getElementById("myinterest").innerHTML = "<span class='spinner-border'></span>";
                $('#mymodal').modal("show");
            }
        };
        xml.open("GET", "jobaction.php?q=" + id, true);
        xml.send();
    }
</script>
</body>
</html>
