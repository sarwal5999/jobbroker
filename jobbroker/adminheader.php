<?php
include "connection.php";
@session_start();
if (!isset($_SESSION["admin"])) {
    header("location:adminlogin.php");
} else {
    $admin = $_SESSION["admin"];
    $adminsql = "select * from admin where email='$admin'";
    $resultadmin = mysqli_query($conn, $adminsql);
    $adminrow = mysqli_fetch_array($resultadmin);
}
?>
<!-- banner-inner -->
<div id="demo-1" class="page-content">
    <div class="dotts">
        <div class="header-top">
            <header>
                <div class="top-head ml-lg-auto text-center">
                    <div class="row top-vl">

                        <div class="col-md-4">
                            <span>Welcome <?php echo $adminrow['firstname']; ?>!</span>
                        </div>
                        <div class="col-md-3 sign-btn">
                            <a href="changepassword.php">
                                <i class="fas fa-lock"></i>Change Password</a>
                        </div>
                        <div class="col-md-3 sign-btn">
                            <a href="logout.php">
                                <i class="fa fa-power-off"></i> Log Out</a>
                        </div>
                        <div class="search col-md-2">
                            <div class="mobile-nav-button">
                                <button id="trigger-overlay" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <!-- open/close -->
                            <div class="overlay overlay-door">
                                <button type="button" class="overlay-close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>

                                <form action="viewstudent.php" method="post" class="ban-form row">

                                    <div class="col-md-4 banf">
                                        <select onchange="showsubcategory(this.value)" class="form-control" id="country12" name="category">
                                            <option value="">Select Category</option>
                                            <?php
                                            $s = "select * from category";
                                            $result = mysqli_query($conn, $s);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?php echo $row['c_id']; ?>"><?php echo $row['c_name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 banf">
                                        <select id="country13" name="subcategory" class="form-control">
                                            <option value="">Select Sub Category</option>
                                            <?php
                                            $s2 = "select * from subcategory";
                                            $result2 = mysqli_query($conn, $s2);
                                            while ($row = mysqli_fetch_array($result2)) {
                                                ?>
                                                <option value="<?php echo $row['sc_id']; ?>"><?php echo $row['sc_name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 banf">
                                        <button class="btn1" type="submit">FIND Candidates
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>

                                </form>
                            </div>

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
                            <li class="nav-item">
                                <a class="nav-link" href="viewstudent.php">Students
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="viewallotedjob.php">Alloted Jobs
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage Admin
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="admin.php">Add </a>
                                    <a class="dropdown-item" href="viewAdmin.php" title="">View </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage Category
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="addcategory.php">Add </a>
                                    <a class="dropdown-item" href="showcategory.php" title="">View </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage Sub Category
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="addsubcategory.php">Add </a>
                                    <a class="dropdown-item" href="viewsubcategory.php" title="">View </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage Employer
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="addemployer.php">Add </a>
                                    <a class="dropdown-item" href="viewemployer.php" title="">View </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage Jobs
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="addjob.php">Add </a>
                                    <a class="dropdown-item" href="viewjob.php" title="">View </a>
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
<script>

    function showsubcategory(id) {
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var ar = this.responseText;
                document.getElementById("country13").innerHTML = ar;
            }
        };
        xml.open("GET", "getsubcategory.php?q=" + id, true);
        xml.send();
    }
</script>
