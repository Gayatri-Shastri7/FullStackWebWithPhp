<?php 
include_once("includes/dbconnect.php");
include_once("includes/internship.php");

if(isset($_GET['i_category'])){
  $category = $_GET['i_category'];
}

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $position = $_POST['internship_category'];
    $mobileno = $_POST['mobile'];
    $email = $_POST['email'];
	$education = $_POST['education'];
	$skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $interest = $_POST['interest'];
    $works = $_POST['works'];
    $resume = $_POST['resume'];
  
    
    $sql1= "INSERT INTO  intern_applicants(ia_name,ia_category,ia_mobile,ia_email,ia_education,ia_skills,ia_experience,ia_whyus,ia_portfolio,ia_resume ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $queryb = $PDO->prepare($sql1);

    $queryb->bindValue(1, $fullname);
    $queryb->bindValue(2, $position);
    $queryb->bindValue(3, $mobileno);
    $queryb->bindValue(4, $email);
	$queryb->bindValue(5, $education);
	$queryb->bindValue(6, $skills);
    $queryb->bindValue(7, $experience);
    $queryb->bindValue(8, $interest);
    $queryb->bindValue(9, $works);
    $queryb->bindValue(10, $resume);
    $queryb->execute();
   
        header('Location: application_success.php');
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Save The Paws - Internship Application</title>
	<meta name="description" content="Save the Paws is an NGO driven by the belief of creating a harmonic rhythm between people and animals for peaceful coexistence. We are a Mumbai based NGO, who have up until now been the voice of more than 400 voiceless souls through our adoption camps.">
	<meta name="keywords" content="campaign, cause, NGO, donate, donations, dog welfare, adoption, fund, fundraising, dogs, ngo, non-profit, organization, volunteer">
	<meta name="author" content="Save The Paws">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon2.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon0.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon1.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon2.png">

	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/carouselmedia.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<script src="js/vendor/modernizr.min.js"></script>
    <style>
	.details-bold{
		color:black;
	}
    .highlight{
        color:#FF7000;
    }
	</style>
</head>

<body>
 
	
		<!-- LOAD PAGE -->
		<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
	<div class="header header-1">
		<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">
				<div class="row">
				<div class="col-sm-7 col-md-6">
						<p><em>Follow us on social media to get instant updates</em></p>
					</div>
					<div class="col-sm-5 col-md-6 col-lg-6">
						<div class="sosmed-icon pull-right">
							<a href="https://www.facebook.com/savethepawsinfo"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/savethepawsinfo"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/savethepawsinfo"><i class="fa fa-instagram"></i></a>
							<a href="https://www.patreon.com/savethepaws"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="index.php">
						<img src="images/apple-touch-icon0.png" alt="" />
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item" margin="3vw">
							</li>

							<li class="nav-item">
								<a class="nav-link" href="index.php">HOME</a>
							</li>


							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ABOUT
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="index.php #aboutus">About Us</a>
									<a class="dropdown-item" href="team.php">Our Team</a>
								</div>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="cause.php">CAUSES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="blog.php">BLOG</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="events.php">EVENTS</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="adopt.php">ADOPTION</a>
							</li>


							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									RESOURCES
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="resources.php">RESOURCES</a>
									<a class="dropdown-item" href="blooddonors.php">BLOOD DONORS</a>
									<a class="dropdown-item" href="pfp.php">PET FRIENDLY PLACES</a>
								</div>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="careers.php">CAREERS</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#footer">CONTACT US</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
<!--SUBPAGE HEAD-->

<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
              <span>Internship Application Form</span>
    </h2>
        <h4 class="text-center">You are applying for <span class="details-bold"><?=$category;?></span> Internship</h4>
  </div>
</div>
</div>
<br>
<!-- // END SUBPAGE HEAD -->
<div class="container">
<div class="col-lg-6 m-auto d-block">
			
			<form method="post" action="intern_application.php"  enctype="multipart/form-data"   class="bg-light">
				
				<div class="form-group">
					<label for="user" class="font-weight-bold" placeholder="Enter Your Name"> Enter Your Name: </label>
					<input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter Your Name" autocomplete="off" required>
					 
				</div>

		        <div class="form-group">
					<span id="position" class=" font-weight-bold">Choose the position you want to apply for</span>
					<input type="text" name="internship_category" class="form-control" id="category" value="<?= $category; ?>" autocomplete="off" required readonly>
				</div>
					 
				<div class="form-group">
					<label class="font-weight-bold"> Mobile Number: </label>
					<input type="tel" name="mobile" class="form-control" id="mobileNumber" placeholder="Enter Your 10-digit mobile number" autocomplete="off" pattern ="^\d{10}$" required>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Email: </label>
					<input type="email" name="email" class="form-control" id="emails" placeholder="Enter your email" autocomplete="off" required>
				</div>
				
				<div class="form-group">
					<label class="font-weight-bold"> Education </label>
					<textarea  name="education" rows="4" cols="50" class="form-control" id="join" placeholder="Give details about your ongoing education" autocomplete="off" required></textarea>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Skills </label>
					<textarea  name="skills" rows="3" cols="50" class="form-control" id="join" autocomplete="off" required></textarea>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Do You Have Any Previous Experience? </label>
					<textarea  name="experience" rows="4" cols="50" class="form-control" id="join" placeholder="Explain your past experiences in  <?= $category; ?>" autocomplete="off" required></textarea>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Why do you want to join us? </label>
					<textarea  name="interest" rows="4" cols="50" class="form-control" id="join" placeholder="Why do you want to join us?" autocomplete="off" required></textarea>
				</div>
                <div class="form-group">
					<label class="font-weight-bold"> Portfolio/Projects </label>
					<textarea  name="works" rows="4" cols="50" class="form-control" id="join" placeholder="Please provide links of your portfolio or projects if any" autocomplete="off" required></textarea>
				</div>
                <div class="form-group">
					<label for="user" class="font-weight-bold"> Enter the link to your resume </label>
					<textarea type="text" rows="4" cols="50" name="resume" class="form-control" id="resume" placeholder="You can provide us your google drive link or any other online links to your resume.In case, you are sharing the google drive link, ensure that the link access setting is set to public " autocomplete="off" required></textarea>
					 
				</div>
				  <br><br><br>
				  <div class="text-center mt-4">
			              	<button class="btn btn-default" type="submit" name="submit">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
			      </div>
			</form>
		</div>
</div>

<div class="spacer-30"></div>
	 
	<!-- CTA -->
	<div class="section cta">
		<div class="content-wrap-20">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
							<div class="body-text">
								<h3>Join your hand with us for a better life and beautiful future.</h3>
							</div>
							<div class="body-action">
								<a href="cause.php" class="btn btn-secondary">DONATE NOW</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- FOOTER SECTION -->
	<div id ="footer" class="footer" data-background="images/footer1.jpg">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-1 col-md-1">
						<div class="footer-item">
							<!-- <img src="images/apple-touch-icon1.png" alt="logo bottom" class="logo-bottom"> -->
							<div class="spacer-60"></div>
							<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> -->
							<!-- <a href="#"><i class="fa fa-angle-right"></i> Read More</a> -->
						</div>
					</div>

					<div class="col-sm-4 col-md-4 text-light">
						<div class="footer-item">
							<div class="footer-title" >
								<h5 style="color:white">WHO WE ARE</h5>
							</div>

							<div class="row">
							<div class="col-sm-6 col-md-6">
									<ul class="list">
										<li><a href="index.php #aboutus" title="About us">About us</a></li>
										<li><a href="cause.php" title="Causes">Causes</a></li>
										<!-- <li><a href="testimonials.html" title="Testimonials">Testimonials</a></li> -->
										<li><a href="index.php #gallery" title="Gallery">Gallery</a></li>
										<li><a href="index.php #faq" title="Faq">FAQs</a></li>
									</ul>
								</div>
								<div class="col-sm-6 col-md-6">
									<ul class="list">
										<li><a href="team.php" title="Our Team">Our Team</a></li>
										<li><a href="events.php" title="Events">Events</a></li>
										<li><a href="#footer" title="Contact Us">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="footer-item">
							<div class="footer-title">
							<h5 style="color:white">WHERE WE WORK</h5>
							</div>
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="info-text">Mumbai, India</div>
								</li>
								 
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text">contact@savethepawsinfo.org.in</div>
								</li>
							 
							</ul>

						</div>
					</div>

					<div class="col-sm-3 col-md-3 ">
						<div class="footer-item">
							<div class="footer-title">
							<h5 style="color:white">FOLLOW US</h5>
							</div>
							<p>Don't forget to follow us..</p>
							<div class="sosmed-icon color-white">
								<a href="https://www.facebook.com/savethepawsinfo"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/savethepawsinfo"><i class="fa fa-twitter"></i></a>
								<a href=" https://www.instagram.com/savethepawsinfo"><i class="fa fa-instagram"></i></a>
								<a href="https://www.patreon.com/savethepaws"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fcopy bg-white text-primary">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright 2020 &copy; <span class="color-primary">Save The Paws</span>. Designed by <span class="color-primary">Rometheme.</span></p>
					</div>
				</div>
			</div>
		</div>

	</div>


<!-- JS VENDOR -->
<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<script src="js/script.js"></script>
</body>
</html>


