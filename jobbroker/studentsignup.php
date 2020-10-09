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
include_once "publicheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 form-group">
            <h1 class="text-center">Student Signup</h1>
        </div>
    </div>
    <form action="insertstudent.php" method="post" id="form1" enctype="multipart/form-data">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" data-rule-required="true"
                               placeholder="Enter First Name">

                    </div>
                    <div class="form-group">
                        <label class="">Last Name</label>
                        <input type="text" name="lname" class="form-control" data-rule-required="true"
                               placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" data-rule-required="true"
                               data-rule-email="true" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="tel" name="mobile" class="form-control" data-rule-required="true"
                               data-rule-number="true"
                               maxlength="10" minlength="10" id="mobile"
                               placeholder="Enter Mobile">
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" data-rule-required="true" id="dob"
                               placeholder="Date of Birth">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <input type="radio" name="gender" class="" checked value="Male" id="male">&nbsp;Male
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="gender" class="" value="Female" id="female">&nbsp;Female
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="gender" class="" value="Other" id="other">&nbsp;Other
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="">Tertiary Institute</label>
                        <select name="ti" class="form-control">
                            <option value="">Select Tertiary Institute</option>
                            <option value="Wellington Institute of Technology (WelTec), Petone Campus">Wellington
                                Institute of Technology (WelTec), Petone Campus
                            </option>
                            <option value="Whitireia New Zealand,Porirua Campus">Whitireia New Zealand,Porirua Campus
                            </option>
                            <option value="None of Above">None of above
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="">Course Code</label>
                        <input type="text" name="coursecode" class="form-control"
                               placeholder="Enter Course Code">
                    </div>
                    <div class="form-group">
                        <label class="">Course Name</label>
                        <input type="text" name="coursename" class="form-control"
                               placeholder="Enter Course Name">
                    </div>
                    <div class="form-group">
                        <label>Course Started</label>
                        <input type="date" name="cs" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Course Completed</label>
                        <input type="date" name="cc" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="">Qualification Title</label>
                        <input type="text" name="qt" class="form-control"placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="">Enrolment Status</label>
                        <select name="es" class="form-control">
                            <option value="">Select Enrolment Status</option>
                            <option value="Pursing">Pursing</option>
                            <option value="Withdrawn">Withdrawn</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="">Skill Set</label>
                        <textarea name="skill" rows="3" class="form-control"
                                  placeholder="Enter Skill Set"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="">CV</label>
                        <input type="file" name="cv" class="form-control" data-rule-required="true">
                    </div>
                    <div class="form-group">
                        <label class="">Cover Lettter</label>
                        <textarea name="description" rows="3" class="form-control"
                                  placeholder="describe your self"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="">DrivingLicense</label>
                        <select name="license" class="form-control" data-rule-required="true">
                            <option value="">Select license</option>
                            <option value="Learner">Learner</option>
                            <option value="Restricted">Restricted</option>
                            <option value="Full License">Full License</option>
                            <option value="None of Above">None of Above</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="">Ethnicity</label>
                        <select name="ethnicity" class="form-control" data-rule-required="true">
                            <option value="">Select Ethnicity</option>
                            <option value="Pacific">Pacific</option>
                            <option value="Maori">Maori</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Asian">Asian</option>
                            <option value="African">African</option>
                            <option value="European">European</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="">Photo</label>
                        <input type="file" name="photo" class="form-control"data-rule-extension="jpg|png|gif">
                    </div>
                    <div class="form-group">
                        <label class="">Location</label>
                        <textarea name="location" rows="5" class="form-control" data-rule-required="true"
                                  placeholder="Enter Location"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" data-rule-required="true"
                               id="password"
                               placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpass" class="form-control" data-rule-required="true"
                               data-rule-equalTo="#password"
                               id="cpass"
                               placeholder="Enter Confirm password">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-dark btn-block">
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <?php
                if (isset($_REQUEST['er'])) {
                    $val = $_REQUEST['er'];
                    if ($val == 0) {
                        ?>
                        <div class="alert alert-primary"><b>Warnin! </b> Email already Exist
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 1) {
                        ?>
                        <div class="alert alert-success"><b>Success! </b> Sign Up Success Now You can Login
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 2) {
                        ?>
                        <div class="alert alert-danger"><b>Warning! </b> Sign Up Failed
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
    </form>
</div>

<?php
include_once "footer.php";
?>
</body>
</html><?php
