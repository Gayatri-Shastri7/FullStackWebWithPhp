<?php
include_once("includes/dbconnect.php");
include_once("includes/donor.php");
$blood_donor = $PDO->prepare("SELECT * FROM donors");
$blood_donor->execute();
$blood_donor = $blood_donor->fetchAll(PDO::FETCH_ASSOC);

$bd = $PDO->prepare("SELECT DISTINCT d_location FROM donors ORDER BY d_location");
$bd->execute();
$bd = $bd->fetchAll(PDO::FETCH_ASSOC);

$bd1 = $PDO->prepare("SELECT DISTINCT d_bloodgrp FROM donors ORDER BY d_bloodgrp");
$bd1->execute();
$bd1 = $bd1->fetchAll(PDO::FETCH_ASSOC);

$bd2 = $PDO->prepare("SELECT DISTINCT d_weight FROM donors ORDER BY d_weight");
$bd2->execute();
$bd2 = $bd2->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Save The Paws - Blood Donors</title>
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


	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<script src="js/vendor/modernizr.min.js"></script>
	<style>
	.details-bold{
		color:#ffc55f; font-weight:700;
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
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/st4.jpeg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Blood Donors</div>
			</div>
		</div>
	</div> 
<br>
<br>
<br>
 
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<h3 class="text-center" style="color:#800000;"><span>Filter</span></h3>
			<h4 class="text-center">Location</h4>
			<ul style="color:black;" class="list-group">
			<?php foreach ($bd as $b_d) { ?> 
			<li class="list-group-item border-0">
			<div class="form-check" >
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input donor_check" value="<?php echo $b_d['d_location']; ?>" id="location">&nbsp;<?php  echo $b_d['d_location'];?> 
				</label>
			</div>
			</li>
	  		<?php } ?>

			</ul>
			<h4 class="text-center">Blood Group</h4>
			<ul  style="color:black;">
			<?php foreach ($bd1 as $b_d1) { ?> 
			<li class="list-group-item border-0">
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input donor_check" value="<?php echo $b_d1['d_bloodgrp']; ?>" id="bloodgrp">&nbsp;<?php  echo $b_d1['d_bloodgrp'];?> 
				</label>
			</div>
			</li>
	  		<?php } ?>

			</ul>
			<h4 class="text-center">Weight</h4>
			<ul  style="color:black;">
			<?php foreach ($bd2 as $b_d2) { ?> 
			<li class="list-group-item border-0">
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input donor_check" value="<?php echo $b_d2['d_weight']; ?>" id="weight">&nbsp;<?php  echo $b_d2['d_weight'];?> 
				</label>
			</div>
			</li>
	  		<?php } ?>

			</ul>
		</div>
		
		<div class="col-md-9" >
			<h3 class="text-center" id="heading" style="color:#800000;">Donors</h3>
			<div class="spacer-30"></div>
			<div class="row" id="result" style="padding-left:3vw;">
			<?php foreach($blood_donor as $bld) {?>
			 		<div class="col-md-4 mb-4 ">
					<div class="card shadow p-3 mb-5 bg-white" style="border-radius:25px;" >

					<div class="card-body">
					<h4 class="card-title" style="color:black;text-transform:uppercase;"><?php echo $bld['d_name'];?></h4>
					<br>
					<p class="card-text"><span class="details-bold">Owner : </span> <?php echo $bld['d_ownername'];?></p>
					<p class="card-text"><span class="details-bold">Contact Info : </span> <?php echo $bld['d_contact'];?></p>
					<p class="card-text"><span class="details-bold">Location: </span><?php echo $bld['d_location'];?></p>
					<p class="card-text"><span class="details-bold">Blood Group : </span><?php echo $bld['d_bloodgrp'];?></p>
					<p class="card-text"><span class="details-bold">Weight : </span><?php echo $bld['d_weight'];?></p>
					</div>
					</div>					
					</div>
			<?php } ?>

			</div>
		</div>

	</div>
</div>

<div class="spacer-90"></div>

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

	<!-- GOOGLEMAP -->
	<script src="js/googlemap-setting.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU&callback=initMap"> </script>

	<script src="js/script.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		$(".donor_check").click(function(){
		
			var action = 'data';
			var location = get_filter_text('location');
			var bloodgrp = get_filter_text('bloodgrp');
			var weight = get_filter_text('weight');

			$.ajax({
				url:'actionbd.php',
				method: 'POST',
				data:{action:action,location:location,bloodgrp:bloodgrp,weight:weight},
				success: function(response){
					$("#result").html(response);
					$("#loader").hide();
				}
			});
		});
		function get_filter_text(text_id){
			var filterData = [];
			$('#'+text_id+':checked').each(function(){
				filterData.push($(this).val());
			});
			return filterData;
		}

	});
	
	</script>
</body>
</html>   