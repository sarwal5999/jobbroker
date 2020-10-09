<?php
include "connection.php";
@session_start();
if (!isset($_SESSION["student"])) {
    header("location:studentlogin.php");
} else {
    $student = $_SESSION["student"];
    $studentsql = "select * from student where email='$student'";
    $resultstudent = mysqli_query($conn, $studentsql);
    $studentrow = mysqli_fetch_array($resultstudent);
}
?>
<!-- banner-inner -->
<div id="demo-1" class="page-content">
    <div class="dotts">
        <div class="header-top">
            <header>
                <div class="top-head ml-lg-auto text-center">
                    <div class="row top-vl">

                        <div class="col-md-3">
                            <span>Welcome <?php echo $studentrow['firstname']; ?>!</span>
                        </div>
                        <div class="col-md-3 sign-btn">
                            <a href="editstudent.php">
                                <i class="fas fa-user"></i>Edit Profile</a>
                        </div>
                        <div class="col-md-3 sign-btn">
                            <a href="studentchangepassword.php">
                                <i class="fas fa-lock"></i>Change Password</a>
                        </div>
                        <div class="col-md-3 sign-btn">
                            <a href="studentlogout.php">
                                <i class="fa fa-power-off"></i> Log Out</a>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="logo">
                        <img src="images/both%20attach%20logo.jpg" class="img-thumbnail" style="height: 10%;width: 30%" alt="">
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
								<i class="fas fa-bars"></i>
							</span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="adminhome.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage Interests
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="addinterest.php">Add </a>
                                    <a class="dropdown-item" href="viewinterest.php" title="">View </a>
                                </div>
                            </li>


                        </ul>

                    </div>
                </nav>
            </header>
        </div>

        <div class="banner-info-w3layouts text-center">
        </div>

    </div>
</div>
