<?php
require_once("php/dbteam.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Save The Paws - Our Team</title>
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
		/*
flip card credit goes to https://www.codeply.com/go/roydoXgaLr/bootstrap-4-flip-cards
*/
		.card-flip>div {
			backface-visibility: hidden;
			transition: transform 300ms;
			transition-timing-function: linear;
			width: 100%;
			height: 100%;
			margin: 0;
			display: flex;
		}

		.card-front {
			transform: rotateY(0deg);
		}

		.card-back {
			transform: rotateY(180deg);
			position: absolute;
			top: 0;
		}

		.card-flip:hover .card-front {
			transform: rotateY(-180deg);
		}

		.card-flip:hover .card-back {
			transform: rotateY(0deg);
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
	<div class="section banner-page" data-background="images/team.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Our Team</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb ">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Our Team</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>

	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<?php
				$get_all_category = $db->query("SELECT * FROM category ORDER BY id ASC");
				if ($get_all_category->num_rows != 0) {
					while ($category = $get_all_category->fetch_assoc()) {
						$category_name = $category["category"];

						$get_member = $db->query("SELECT * FROM teams WHERE category = '$category_name' ORDER BY category ASC");
						if ($get_member->num_rows != 0) {
							echo '<h2 class="text-center">  ' . $category_name . ' </h2>';
							echo "<div class='row'>";
							while ($member = $get_member->fetch_assoc()) {
								$member_name = $member["name"];
								$member_pic = $member["pic"];
								$designation = $member["designation"];
								$facebook = "";
								$twitter = "";
								$instagram = "";
								$linkedin = "";
								$description = "";
								if ($member["description"] != "") {
									$description  = ' <i class="fa fa-angle-down collapse_btn" style="font-size:25px;cursor:pointer"> </i> <br> <div class="card-footer collapse hidden_box  border-top-0 bg-white"> 
									<p> ' . $member['description'] . ' </p>
									</div>';
								}
								if ($member["facebook"] != "") {
									$facebook = '<a href="' . $member["facebook"] . '" target="_blank"> <i class="fa fa-facebook mx-2" style="font-size:25px">  </i>  </a>';
								}
								if ($member["instagram"] != "") {
									$instagram = '<a href="' . $member["instagram"] . '" target="_blank"> <i class="fa fa-instagram mx-2" style="font-size:25px">  </i>  </a>';
								}
								if ($member["twitter"] != "") {
									$twitter = '<a href="' . $member["twitter"] . '" target="_blank"> <i class="fa fa-twitter mx-2" style="font-size:25px">  </i>  </a>';
								}
								if ($member["linkedin"] != "") {
									$linkedin = '<a href="' . $member["linkedin"] . '" target="_blank"> <i class="fa fa-linkedin mx-2" style="font-size:25px">  </i>  </a>';
								}
								echo '<div class="col-md-4 px-3">
								<div class="card  wow slideInUp slow p-2 mt-3" style="border-radius:15px;box-shadow:0px 0px 10px #ccc"> 
								<div class="card-content text-center"> 
								<img src="ad/admin/' . $member_pic . '" class="card-top-img"style="border-radius:15px"> </img>
								<div class="card-body text-center"> 
								<h4 style="color:#FF7000"> ' . $member_name . ' </h4> 
								<p class="text-dark"> ' . $designation . ' </p>
								<div class="text-center"> ' . $facebook . $twitter . $instagram . $linkedin .  ' </div> 
								 </div>
								 ' . $description . '
								</div>
								</div>
								</div>';
							}
							echo "</div>";
						} else {
							echo "";
						}
					}
				} else {
					echo "";
				}
				?>
				<div class="row">

					<div class="cta-info">
						<h1 class="section-heading center">
							Join <span>Our</span> Team?
						</h1>
						<p>Interested to join us ? Click on the button below</p>
						<div class="spacer-50"></div>
						<!-- <a href="#" class="btn btn-primary margin-btn">LEARN MORE</a>  -->
						<a href="careers.php" class="btn btn-secondary margin-btn">JOIN US NOW</a>
					</div>

				</div>

			</div>
		</div>
	</div>

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

	<!-- MAIN JS -->
	<script src="js/script.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
		$(document).ready(function() {
			function collapse_show() {
				$(".collapse_btn").each(function() {
					$(this).click(function() {
						let parent = this.parentElement.parentElement;
						let hidden_box = parent.getElementsByClassName("hidden_box");
						$(hidden_box).collapse("toggle");
					})
				})
			};
			collapse_show();
		});
	</script>

	<script>
		new WOW().init();
	</script>
</body>

</html>