<?php
    session_start();
    if ($_SESSION['login'] == TRUE && $_SESSION['status'] == 'Active') {

        include("db_con/dbCon.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Lawyer Management System</title>
</head>
<body>
    <header class="customnav bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg ">
                        <a class="navbar-brand cus-a" href="#">Lawyer Management System</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="">
                                    <a class="nav-link cus-a" href="#">Full Name: <?php echo $_SESSION['first_Name']; ?> <?php echo $_SESSION['last_Name']; ?></a>
                                </li>
                                <li class="">
                                    <a class="nav-link cus-a" href="logout.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">My Profile</div>
            <div class="list-group list-group-flush">
                <a href="lawyer_dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="lawyer_edit_profile.php" class="list-group-item list-group-item-action bg-light">Edit Profile</a>
                <a href="update_password_admin.php" class="list-group-item list-group-item-action bg-light">Update Password</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <section class="bookingrqst">
            <div class="container">
                <div class="span7">
                    <div class="">
                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <?php if (isset($_GET['ok'])) {
                                echo "<div class='alert alert-success alert-dismissible fade show'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                update your Profile.
                                </div>";
                            } ?>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-1"></div>

                                <?php
                                    $a = $_SESSION['lawyer_id'];
                                    $conn = connect();

                                    $result = mysqli_query($conn, "SELECT * FROM user, lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active' AND user.u_id='$a'");

                                    while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <div class="col-md-10">
                                    <form action="save_lawyer_edit_Profile.php" method="post" enctype="multipart/form-data" id="validateForm">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fname">First Name</label>
                                                <input type="text" class="form-control" id="first_Name" name="first_Name" value="<?php echo $row["first_Name"]; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lname">Last Name</label>
                                                <input type="text" class="form-control" id="lname" name="last_Name" value="<?php echo $row["last_Name"]; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="num">Contact Number</label>
                                            <input type="text" class="form-control" name="contact_number" id="contact_number" value="<?php echo $row["contact_Number"]; ?>">
                                        </div>

                                        <div class="form-row"><label for="edu"><small>Put Your Last Education</small></label></div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="institute">University / College Name</label>
                                                <input type="text" class="form-control" id="institute" name="university_College" value="<?php echo $row["university_College"]; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="degree">Degree</label>
                                                <select id="degree" name="degree" class="form-control">
                                                    <option value=" " selected>Choose...</option>
                                                    <option value="LLB" <?php if ($row['degree'] == 'LLB') { echo "selected"; } ?>>LLB</option>
                                                    <option value="LLM" <?php if ($row['degree'] == 'LLM') { echo "selected"; } ?>>LLM</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="pyear">Passing Year</label>
                                                <select id="passing_year" name="passing_year" class="form-control">
                                                    <option value=" " selected>Choose...</option>
                                                    <?php for ($year = 2000; $year <= 2019; $year++) { ?>
                                                        <option value="<?php echo $year; ?>" <?php if ($row['passing_year'] == $year) { echo "selected"; } ?>><?php echo $year; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row"><label for="edu"><small>Put Your Chamber Location</small></label></div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="address">Full Address</label>
                                                <input type="text" class="form-control" id="address" name="full_address" value="<?php echo $row["full_address"]; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="city">City</label>
                                                <select id="city" name="city" class="form-control">
                                                    <option value=" " selected>Choose...</option>
                                                    <option value="Karachi" <?php if ($row['city'] == 'Karachi') { echo "selected"; } ?>>Karachi</option>
                                                    <option value="lahore" <?php if ($row['city'] == 'lahore') { echo "selected"; } ?>>lahore</option>
                                                    <option value="Islamabad" <?php if ($row['city'] == 'Islamabad') { echo "selected"; } ?>>Islamabad</option>
                                                    <option value="Peshawar" <?php if ($row['city'] == 'Peshawar') { echo "selected"; } ?>>Peshawar</option>
                                                    <option value="Quetta" <?php if ($row['city'] == 'Quetta') { echo "selected"; } ?>>Quetta</option>
                                                    <option value="Multan" <?php if ($row['city'] == 'Multan') { echo "selected"; } ?>>Multan</option>
                                                    <option value="Rawalpindi" <?php if ($row['city'] == 'Rawalpindi') { echo "selected"; } ?>>Rawalpindi</option>
                                                    <option value="Hyderabad" <?php if ($row['city'] == 'Hyderabad') { echo "selected"; } ?>>Hyderabad</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="zip">Zip code</label>
                                                <input type="text" class="form-control" id="zip" name="zip_code" value="<?php echo $row["zip_code"]; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="practise">Length of Practise</label>
                                            <select id="practise" name="practise_Length" class="form-control">
                                                <option value=" " selected>Choose...</option>
                                                <option value="1-5 Years" <?php if ($row['practise_Length'] == '1-5 Years') { echo "selected"; } ?>>1-5 Years</option>
												<option value="6-10 Years" <?php if ($row['practise_Length'] == '6-10 Years') { echo "selected"; } ?>>6-10 Years</option>
                                                <option value="11-15 Years" <?php if ($row['practise_Length'] == '11-15 Years') { echo "selected"; } ?>>11-15 Years</option>
                                                <option value="16-20 Years" <?php if ($row['practise_Length'] == '16-20 Years') { echo "selected"; } ?>>16-20 Years</option>
                                                <option value="21+ Years" <?php if ($row['practise_Length'] == '21+ Years') { echo "selected"; } ?>>21+ Years</option>
                                            </select>
                                        </div>

                                    
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                                <?php
                                    }
                                    mysqli_close($conn);
                                ?>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
    } else {
        header('location:login.php?deactivate');
    }
?>


