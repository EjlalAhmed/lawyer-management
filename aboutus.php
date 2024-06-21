<?php
	session_start();
	
	include("db_con/dbCon.php");
	
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/media.css">
		<title></title>
	</head>
	<body style="background-color: whitesmoke;">
	<header class="customnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-md">
							<a class="navbar-brand cus-a" href="index.php"><img src="images/logo.png" alt=""></a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="lawyers.php">Lawyers</a><!--lawyers.html page-->
									</li>
									<li class="">
										<a class="nav-link cus-a" href="aboutus.php">About </a>
									</li>
									<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
										<li class="">
											<a class="nav-link cus-a" href="user_dashboard.php">Dashboard</a>
										</li>
										<li class="">
											<a class="nav-link cus-a" href="logout.php">Logout</a>
										</li>
										<?php }else{ ?>
										<li class="">
											<a class="nav-link cus-a" href="login.php">Login</a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Register
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="lawyer_register.php">Register as a lawyer</a><!--redirect lawyer register page-->
												<a class="dropdown-item" href="user_register.php">Register as a user</a><!--redirect user register page-->
											</div>
										</li>
									<?php }?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>



   <!--About us-->



   <h1 class="heading1 mt-5 text-center ">ABOUT US</h1>
    <div class="aboutus container-fluid mt-5 ">
        <div class="row">
            <div class="col-md-7">
                <h2 class="heading2 text-center animate__animated animate__fadeInDown ">What is Sanjalika Water Park?</h2>
                <p class="paragraph ms-3 mt-3 me-3 text-center animate__animated animate__fadeInUp">Sanjalika Water Park is a dazzling oasis of aquatic fun
                    and relaxation nestled in the heart of a tropical paradise. With its lush green surroundings and a
                    wide array of exhilarating water attractions, Sanjalika is the perfect destination for families,
                    thrill-seekers, and those looking to escape the scorching summer heat. The park boasts an impressive
                    lineup of water slides, lazy rivers, and wave pools that promise endless entertainment and
                    refreshing respite. Whether you're plummeting down heart-pounding slides, basking in the sun on a
                    tranquil river float, or enjoying delicious refreshments at the poolside cafe, Sanjalika offers an
                    unforgettable aquatic experience that will leave you with lasting memories of summer bliss. Come and
                    dive into a world of aquatic adventure at Sanjalika Water Park, where fun and relaxation unite to
                    create the ultimate water park getaway.</p>
            </div>
            <div class="col-md-5 mx-auto d-flex justify-content-center align-items-center">

                <img class="image1 img-fluid" src="images/abtus.jpg">
            </div>
        </div>
    </div>









<br><br><br><br><br><br>






	<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>We provide professional legal services. Our team of experienced lawyers is here to help you with any legal issues.</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white">Home</a></li>
                    <li><a href="lawyers.php" class="text-white">Lawyers</a></li>
                    <li><a href="aboutus.php" class="text-white">About</a></li>
                    
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Email: info@lawfirm.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Law St, Legal City, LS 12345</p>
                <div class="social-links">
                    <a href="#" class="text-white mr-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white mr-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white mr-2"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <p class="mb-0">&copy; 2024 All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    </body>
</html>