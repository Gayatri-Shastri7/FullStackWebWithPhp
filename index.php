<?php
require_once("php/dbteam.php");
require_once("php/dbevent1.php");
include_once("includes/dbconnect.php");
date_default_timezone_set("Asia/Kolkata");

$cause = $PDO->prepare("SELECT  * FROM urgent_cause");
$cause->execute();
$causes = $cause->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Save The Paws - Welcome</title>
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
							<a href="https://www.patreon.com/savethepaws"><i class="fa fa-patreon"></i></a>
							<a href="https://www.youtube.com/savethepaws"><i class="fa fa-youtube"></i></a>
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
									<a class="dropdown-item" href="#aboutus">About Us</a>
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
								<a class="nav-link" href="#contact">CONTACT US</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>


	<!-- BANNER -->
	<div class="spacer-50"></div>
	<div id="oc-fullslider" class="banner owl-carousel">
		<div class="owl-slide">
			<div class="item">
				<img src="images/Home_1.jpg" alt="Slider">
				<div class="slider-pos">
					<div class="container">
						<div class="wrap-caption">
							<h1 class="caption-heading bg"><span>#Adopt</span> Don't Shop</h1>
							<p class="bg">Adopt! If you can't adopt, foster! If you can't foster, sponsor! If you can't sponsor,
								volunteer! If you can't volunteer, donate! If you can't donate, educate!</p>
							<a href="cause.php" class="btn btn-primary">DONATE NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-slide">
			<div class="item">
				<img src="images/Home_2.jpg" alt="Slider">
				<div class="slider-pos">
					<div class="container">
						<div class="wrap-caption center">
							<h1 class="caption-heading bg"><span>#Feed</span> A Stray</h1>
							<p class="bg">In life, you may do something big and you may do something small but anything is better than
								nothing at all. Feed a stray, it will make a big difference in their little world.</p>
							<a href="cause.php" class="btn btn-primary">DONATE NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-slide">
			<div class="item">
				<img src="images/Home_3.jpg" alt="Slider">
				<div class="slider-pos">
					<div class="container">
						<div class="wrap-caption right">
							<h1 class="caption-heading bg"><span># Voice</span> Of The Voiceless</h1>
							<p class="bg">All creatures under the blue sky deserve to be heard, deserve to be loved. We will be
								their voice, we will stand by their side. Changing lives, one rescue at a time. </p>
							<a href="cause.php" class="btn btn-primary">DONATE NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>

	<!-- ABOUT US -->
	<div class="spacer-50"></div>
	<div id="aboutus" class="section section-border">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
				<div class="spacer-50"></div>
					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							Welcome <span>To</span> SaveThePaws
						</h2>

						<p>We, the team of Save The Paws, are a group of people working towards the
							rehabilitation and re-homing of abused and abandoned dogs. We do this by arranging
							adoption camps at various locations across Mumbai. These adoption camps invite
							rescuers from all over the city to bring their rescued animals and be able to meet
							with so many potential adopting families. All the funds that we collect during the
							adoption camps as registration charges, go towards feeding and rescue of other dogs.
							So far, we have successfully organized more than 20 adoption camps and have seen more than
							300 rescued animals starting a new and better life with their forever families.
						</p>
						<!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus. Teritatis et quasi architecto.</p> -->
						<div class="spacer-30"></div>
						<a href="#our-team" class="btn btn-primary">MEET OUR TEAMS</a>
						<div class="spacer-30"></div>

					</div>

					<div class="col-sm-6 col-md-6">
                          <br><br>
						<img src="images/About Us.jpg" alt="" class="img-fluid img-border">

					</div>


				</div>

				<!-- <div class="spacer-70"></div> -->

				<!-- <div class="row"> -->

					<!-- <div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-file-text-o"></i>
							</div>
							<div class="body-content">
								<h2>12,280</h2>
								<p class="uk18">Complete</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="body-content">
								<h2>1,825</h2>
								<p class="uk18">Our Team</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="body-content">
								<h2>37</h2>
								<p class="uk18">Awards</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-male"></i>
							</div>
							<div class="body-content">
								<h2>256,861</h2>
								<p class="uk18">Volunteer</p>
							</div>
						</div>
					</div> -->

				<!-- </div> -->

			<!-- </div> -->
		</div>
	</div>

	<!-- WE NEED YOUR HELP -->
	<div class="spacer-0"></div>
	<div id="cause" class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							We <span>Need</span> Your Help
						</h2>

						<p class="subheading text-center">You have the power to change the lives of numerous beings by donating a small amount to our cause. Your generous contribution will go towards the upkeep and running of our shelter and in the service of the animals we rescue, allowing us to continue the work we do and make lives better for our four legged friends.
Noble donations from the community keep us going and allow us to: feed our rescues and strays, pay the veterinary bills of the animals who need medical attention, vaccinations, de-worming, rehabilitating among other things, allowing us to rescue and find forever homes for more animals while also working on increasing our capacity to help more in need.</p>

						</div>
					<div class="clearfix"></div>
					<?php foreach ($causes as $c) { ?> 
			        <!-- Item 3 -->
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		                		<img src="ad/admin/donationimages/<?php echo $c['ucause_img'];?> " alt="">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="cause-single.html"> <?php echo $c['ucause_name'];?></a></p>
		              			<div class="text"> <?php echo $c['ucause_maintitle'];?></div>
		              			<div class="progress-fundraising">
												<?php 
												
												$sql1="SELECT SUM(amount) as total_contributed FROM donations WHERE purpose LIKE '%{$c['ucause_name']}%'";
												$query2 = $PDO->prepare($sql1);
												$query2->execute();
												$row2= $query2->fetch(PDO::FETCH_ASSOC);
												$total_contributed = $row2['total_contributed'];
												?>
							              			<div class="total">Rs<?php echo $total_contributed;?>  <span>&nbsp;/&nbsp;</span>&nbsp;Rs<?php echo $c['ugoal'];?></div>
						              			  	<div class="persen">
														<?php 
														echo round(($total_contributed/$c['ugoal'])*100);
														?> %
														</div>
							              			<div class="progress">
													  <div class="progress-bar" role="progressbar" aria-valuenow="<?php 
														echo round(($total_contributed/$c['ugoal'])*100);
														?>" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
		              		</div>
			            </div>
			        </div>
					<?php } ?>
					<div class="col-sm-12 col-md-12">
						<div class="spacer-50"></div>
						<div class="text-center">
							<a href="cause.php" class="btn btn-primary">SEE ALL CAUSE</a>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- HOW TO HELP US -->
	<div class="spacer-50"></div>
	<div id="faq" class="section section-border">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							How To <span>Help</span> Us
						</h2>
						<div class="section-subheading">The smallest gesture can have the loudest impact! A
							small donation, fostering our fur-babies, considering adoption, advocating and educating
							other about rehabilitating shelter animals has the power to change the lives of so many
							creatures at our shelter. We believe that these animals can change the lives of individuals
							and families for the better and they deserve a forever home but not everyone can provide a
							forever home for a multitude of reasons.
							If you are one of them and still want to do your part, here is what you can do.</div>
						<div class="margin-bottom-50"></div>
						<dl class="hiw">
							<dt><span class="fa fa-gift"></span></dt>
							<dd>
								<div class="no">01</div>
								<h3>Send Donation</h3>Considering opening your hearts
								and wallets to us. All donations go towards the rescue, rehabilitation, accommodation,
								treatment and nourishment of animals.
								A small contribution on your part can be a huge change for another soul
							</dd>
							<dt><span class="fa fa-male"></span></dt>
							<dd>
								<div class="no">02</div>
								<h3>Become Volunteer</h3>If you cannot
								commit to an adoption, consider fostering one of our babies because a
								lot of animals need our help and we do not have the heart to turn anyone
								away. Sometimes, our shelter are over crowded and at times, some dogs do
								not do well in the company of other dogs and need individual attention.
								Being a pit-stop for these babies
								while they find their forever homes would be a great help.
							</dd>
							<dt><span class="fa fa-bullhorn"></span></dt>
							<dd>
								<div class="no">03</div>
								<h3>Share Media</h3>Don't forget to share!
							</dd>

						</dl>
					</div>

					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							FAQ
						</h2>
						<div class="section-subheading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						<div class="margin-bottom-50"></div>
						<div class="accordion rs-accordion" id="accordionExample">
							<!-- Item 1 -->
							<div class="card mb-2">
								<div class="card-header" id="headingOne">
									<h4 class="title">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Earn Impact Points
										</button>
									</h4>
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
										Create and publilsh dynamic websites for desktop, tablet, and mobile devices that meet the latest web standards- without writing code. Design freely using familiar tools and hundreds of web fonts. easily add interactivity, including slide shows, forms, and more.
									</div>
								</div>
							</div>

							<!-- Item 2 -->
							<div class="card mb-2">
								<div class="card-header" id="headingTwo">
									<h4 class="title">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											No Goal Requirements
										</button>
									</h4>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>

							<!-- Item 3 -->
							<div class="card mb-2">
								<div class="card-header" id="headingThree">
									<h4 class="title">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Most Trusted
										</button>
									</h4>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									<div class="card-body">
										<p>Unzip the file, locate muse file and double click the file and you will directly to adobe muse. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe muse without writing any code.</p>
										<p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
									</div>
								</div>
							</div>

							<!-- Item 4 -->
							<div class="card mb-2">
								<div class="card-header" id="headingFour">
									<h4 class="title">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											Your Charitable Life
										</button>
									</h4>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
									<div class="card-body">
										<p>Unzip the file, locate muse file and double click the file and you will directly to adobe muse. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe muse without writing any code.</p>
										<p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
									</div>
								</div>
							</div>

							<!-- Item 5 -->
							<div class="card mb-2">
								<div class="card-header" id="headingFive">
									<h4 class="title">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											Daily Report
										</button>
									</h4>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
									<div class="card-body">
										<p>Unzip the file, locate muse file and double click the file and you will directly to adobe muse. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe muse without writing any code.</p>
										<p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
									</div>
								</div>
							</div>


						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- OUR TEAM -->
	<div class="spacer-50"></div>
	<div id="our-team" class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Team</span>
						</h2>
						<p class="subheading text-center">Saving lives is a full time job and it can never be done by one person. Meet our warriors, the soul of Save The Paws that relentlessly works to make life for our four-legged friends better!</p>
					</div>
				</div>
				<?php
				$get_all_category = $db->query("SELECT * FROM category ORDER BY id ASC LIMIT 2 ");
				if ($get_all_category->num_rows != 0) {
					while ($category = $get_all_category->fetch_assoc()) {
						$category_name = $category["category"];

						$get_member = $db->query("SELECT * FROM teams WHERE category = '$category_name' ORDER BY category ASC");
						if ($get_member->num_rows != 0) {
							echo '<h3>  ' . $category_name . ' </h3>';
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
								echo '<div class="col-md-3 px-0 team_col">
								<div class="card  wow slideInUp slow border-0 shadow-0 mt-3 mx-2" style="border-radius:15px;box-shadow:0px 0px 5px #ccc"> 
								<div class="card-content text-center"> 
								<img src="ad/admin/' . $member_pic . '" class="card-top-img"style="border-radius:10px 10px 0px 0px"> </img>
								<div class="card-body text-center"> 
								<h4 style="color:#800000"> ' . $member_name . ' </h4> 
								<p class="color-secondary"> ' . $designation . ' </p>
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
    <div class="spacer-50"></div>
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


	 
	<!-- OUR GALLERY -->
	<div class="spacer-50"></div>
	<div id="gallery" class="section" data-background="images/1920x900 Home_1.jpg">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Gallery</span>
						</h2>
						<!-- <p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p> -->
					</div>

					<div class="row popup-gallery gutter-5">
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/g1.jpg" title="Gallery #1">
									<img src="images/g1.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/g2.jpg" title="Gallery #2">
									<img src="images/g2.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/g3.jpg" title="Gallery #3">
									<img src="images/g3.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/g4.jpg" title="Gallery #4">
									<img src="images/g4.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/g5.jpg" title="Gallery #5">
									<img src="images/g5.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/g6.jpg" title="Gallery #6">
									<img src="images/g6.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- EVENTS -->
	<div class="spacer-50"></div>
	<div id="events" class="section bg-1 pt-0">
		<div class="content-wrap pt-0">
			<div class="container pt-0">
				<div class="row" >
					<div class="col-sm-6 col-md-6">
						<div class="event-pin">
							<h1 class="color-white">#Events</h1>
							 
						</div>
						<div class="col-sm-7 col-md-8 col-md-offset-1">
							<h2 class="section-heading light">
								<span>Upcoming</span> Events
							</h2>
						</div>
						<div class="list-events" >
							<?php
							$today =  date('Y-m-d');
							$get_all_data = $evdb->query("SELECT * FROM events WHERE start_date >= '$today' ORDER BY start_date,start_time ASC");
							if ($get_all_data->num_rows != 0) {
								while ($data = $get_all_data->fetch_assoc()) {
									$start_date = date_create($data["start_date"]);
									$satrt_time = date_create($data["start_time"]);
									$end_time = date_create($data["end_time"]);
									echo '<div class="box-event">
								<div class="meta-date">
									<div class="date">' . date_format($start_date, "d") . '</div>
									<div class="month">' . date_format($start_date, "M") . '</div>
								</div>
								<div class="body-content">
									<h4><a href="events-single.php?event_id=' . $data["event_id"] . '">' . $data["name"] . '</a></h4>
									<div class="meta">
										<span class="date text-light"><i class="fa fa-clock-o text-light"></i>' . date_format($satrt_time, "h:i:A")  . ' - ' . date_format($end_time, "h:i:A") . '</span>
										<span class="location text-light"><i class="fa fa-map-marker text-light"></i>  ' . $data['location'] . '</span>
									</div> 
									<p>' . $data["description"] . '</p> 
								</div>
							</div>';
								}
							}
							?>

						</div>

					</div>

				</div>


			</div>
		</div>
	</div>

	<!-- CONTACT -->
	<div class="spacer-50"></div>
	<div id="contact" class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-8 col-md-8">
						<!-- MAPS -->
						<!-- <div class="maps-wraper">
							<div id="cd-zoom-in"></div>
							<div id="cd-zoom-out"></div>
							<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" data-marker="images/cd-icon-location.png">
							</div>
						</div>
						<div class="spacer-90"></div>
					</div>

					<div class="col-sm-4 col-md-4">
						<h2 class="section-heading">
							Contact <span>Details</span>
						</h2>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="info-text">Mumbai, India</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-text">savethepawsinfo@gmail.com</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="info-text">(0761) 654-123987</div>
						</div>


					</div> -->

					<div class="clearfix"></div>

					<div class="col-sm-12 col-md-12">
						 
					</div>

				</div>

			</div>
		</div>
	</div>


	<!-- CTA -->
	<div class="spacer-50"></div>
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
	<div class="spacer-50"></div>
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
								<!-- <li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">+91-9930463742</div>
								</li> -->
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text">contact@savethepawsinfo.org.in</div>
								</li>
								<!-- <li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">Mon - Sat 09:00 - 17:00</div>
								</li> -->
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
								<a href="https://www.patreon.com/savethepaws"><i class="fa fa-patreon"></i></a>
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
</body>

</html>