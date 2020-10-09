<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body class="boxed_wrapper">
<?php
include_once "studentheader.php";
$s = "select * from student where studentid='$studentrow[0];'";
$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 form-group">
            <h1 class="text-center">My Profile</h1>
        </div>
    </div>
    <form action="updatestudent.php" method="post" id="form1" enctype="multipart/form-data">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" value="<?php echo $row['firstname']; ?>" name="fname" class="form-control"
                               data-rule-required="true"
                               placeholder="Enter First Name">

                    </div>
                    <div class="form-group">
                        <label class="">Last Name</label>
                        <input type="text" value="<?php echo $row['lastname']; ?>" name="lname" class="form-control"
                               data-rule-required="true"
                               placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" readonly value="<?php echo $row['email']; ?>" name="email"
                               class="form-control"
                               data-rule-required="true"
                               data-rule-email="true" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="tel" value="<?php echo $row['mobile']; ?>" name="mobile" class="form-control"
                               data-rule-required="true"
                               data-rule-number="true"
                               maxlength="10" minlength="10" id="mobile"
                               placeholder="Enter Mobile">
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" value="<?php echo $row['dob']; ?>" class="form-control"
                               data-rule-required="true" id="dob"
                               placeholder="Date of Birth">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <input type="radio" <?php if ($row['gender'] == 'Male') {
                                    echo 'checked';
                                } ?> name="gender" class="" value="Male" id="male">&nbsp;Male
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" <?php if ($row['gender'] == 'Female') {
                                    echo 'checked';
                                } ?> name="gender" class="" value="Female" id="female">&nbsp;Female
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" <?php if ($row['gender'] == 'Other') {
                                    echo 'checked';
                                } ?> name="gender" class="" value="Other" id="other">&nbsp;Other
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="">Tertiary Institute</label>
                        <select name="ti" class="form-control" data-rule-required="true">
                            <option value="">Select Tertiary Institute</option>
                            <option <?php if ($row['tertiaryinstitute'] == "Wellington Institute of Technology (WelTec), Petone Campus") {
                                echo 'selected';
                            } ?> value="Wellington Institute of Technology (WelTec), Petone Campus">Wellington
                                Institute of Technology (WelTec), Petone Campus
                            </option>
                            <option <?php if ($row['tertiaryinstitute'] == "Whitireia New Zealand,Porirua Campus") {
                                echo 'selected';
                            } ?> value="Whitireia New Zealand,Porirua Campus">Whitireia New Zealand,Porirua Campus
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="">Course Code</label>
                        <input type="text" name="coursecode" class="form-control" data-rule-required="true"
                               placeholder="Enter Course Code" value="<?php echo $row['coursecode']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="">Course Name</label>
                        <input type="text" name="coursename" class="form-control" data-rule-required="true"
                               placeholder="Enter Course Name" value="<?php echo $row['coursename']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Course Started</label>
                        <input type="date" value="<?php echo $row['coursestarted']; ?>" name="cs" class="form-control"
                               data-rule-required="true">
                    </div>
                    <div class="form-group">
                        <label>Course Completed</label>
                        <input type="date" name="cc" value="<?php echo $row['coursecompleted']; ?>" class="form-control"
                               data-rule-required="true">
                    </div>
                    <div class="form-group">
                        <label class="">Qualification Title</label>
                        <input type="text" name="qt" class="form-control" data-rule-required="true"
                               placeholder="Enter Title" value="<?php echo $row['qualificationtitle']; ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="">Enrolment Status</label>
                        <select name="es" class="form-control" data-rule-required="true">
                            <option value="">Select Enrolment Status</option>
                            <option <?php if ($row['enrolmentstatus'] == "Pursing") {
                                echo 'selected';
                            } ?> value="Pursing">Pursing
                            </option>
                            <option <?php if ($row['enrolmentstatus'] == "Withdrawn") {
                                echo 'selected';
                            } ?> value="Withdrawn">Withdrawn
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="">Skill Set</label>
                        <textarea name="skill" rows="3" class="form-control" data-rule-required="true"
                                  placeholder="Enter Skill Set"><?php echo $row['skillset']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="">CV</label>
                        <input type="file" name="cv" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="">Description</label>
                        <textarea name="description" rows="3" class="form-control" data-rule-required="true"
                                  placeholder="describe your self"><?php echo $row['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="">License</label>
                        <select name="license" class="form-control" data-rule-required="true">
                            <option value="">Select License</option>
                            <option <?php if ($row['licensetype'] == "Learner") {
                                echo "selected";
                            } ?> value="Learner">Learner
                            </option>
                            <option <?php if ($row['licensetype'] == "Restricted") {
                                echo "selected";
                            } ?> value="Restricted">Restricted
                            </option>
                            <option <?php if ($row['licensetype'] == "Full License") {
                                echo "selected";
                            } ?> value="Full License">Full License
                            </option>
                            <option <?php if ($row['licensetype'] == "None of Above") {
                                echo "selected";
                            } ?> value="None of Above">None of Above
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="">Ethnicity</label>
                        <select name="ethnicity" class="form-control" data-rule-required="true">
                            <option value="">Select Ethnicity</option>
                            <option <?php if ($row['ethnicity'] == "Pacific") {
                                echo 'selected';
                            } ?> value="Pacific">Pacific
                            </option>
                            <option <?php if ($row['ethnicity'] == "Maori") {
                                echo 'selected';
                            } ?> value="Maori">Maori
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="">Photo</label>
                        <input type="file" name="photo" class="form-control" data-rule-extension="jpg|png|gif">
                    </div>
                    <div class="form-group">
                        <label class="">Location</label>
                        <textarea name="location" rows="5" class="form-control" data-rule-required="true"
                                  placeholder="Enter Location"><?php echo $row['location']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <img src="<?php echo $row['photo']; ?>" style="height: 150px;width: 150px" alt="">
                        <a href="<?php echo $row['cv']; ?>" target="_blank">View CV</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-dark btn-block">
        </div>
    </form>
    <div class="form-group row">
        <label for="username" class="col-md-2"></label>
        <div class="col-md-10">
            <?php
            if (isset($_REQUEST['er'])) {
                $val = $_REQUEST['er'];
                if ($val == 0) {
                    ?>
                    <div class="alert alert-primary"><b>Warning! </b> Email already Exist
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 1) {
                    ?>
                    <div class="alert alert-success"><b>Success! </b> Profile Updated Successfully
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 2) {
                    ?>
                    <div class="alert alert-danger"><b>Warning! </b> Failed to Modify Profile
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 3) {
                    ?>
                    <div class="alert alert-warning"><b>Warning! </b> Image size must be less than 500 kb
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 4) {
                    ?>
                    <div class="alert alert-warning"><b>Warning! </b> CV size must be less than 500 kb
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>
</body>
</html><?php
