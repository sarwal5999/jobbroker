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
                <div class="alert alert-danger"><b>Fail! </b> Student deletion failed
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 1) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Student deleted Successfully
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 3) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Student Updated Successfully
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 2) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Student Updation Failed
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 4) {
                ?>
                <div class="alert alert-danger"><b>Fail! </b>Job Already Alloted
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 5) {
                ?>
                <div class="alert alert-success"><b>Success! </b> Job Alloted Successfully
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            } elseif ($val == 6) {
                ?>
                <div class="alert alert-success"><b>Warning! </b> Failed to allot Job
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">View All Students</h1>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-sm">
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
                <th>View&nbsp;Interests</th>
                <th>Assign job</th>
                <th>Delete</th>
            </tr>
            </thead>
            <?php
            if (isset($_POST['subcategory'])) {
                $category = $_POST['category'];
                $subcategory = $_POST['subcategory'];
                $s = "select * from student_interest inner join student on student.studentid=student_interest.studentid where student_interest.subcatid='$subcategory'";
            } else {
                $s = "select * from student";
            }
            //            echo $s;
            $k = 1;
            $result = mysqli_query($conn, $s);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $k++; ?></td>
                    <td><img style="height: 100px;width: 100px" src="<?php echo $row['photo']; ?>" alt=""></td>
                    <td><?php echo $row['studentid']; ?></td>
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
                    <td><a onclick="showinterests('<?php echo $row['studentid']; ?>')"><i class="fa fa-info-circle"></i></a>
                    </td>

                    <td><a class="text-danger"
                           href="assignjob.php?q=<?php echo $row['studentid'] ?>">Allot Job</a>
                    </td>
                    <td><a class="text-danger" onclick="return confirm('Are you Sure you want to Delete?')"
                           href="deletestudent.php?q=<?php echo $row['studentid'] ?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="mymodal">
    <div class="modal-dialog modal-sm modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Student's Interests</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sr&nbsp;no.</th>
                            <th>Interests&nbsp;Name</th>
                            <th>Interests&nbsp;Category</th>
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
        xml.open("GET", "interestaction.php?q=" + id, true);
        xml.send();
    }
</script>
</body>
</html>
