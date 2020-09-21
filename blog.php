<?php

include_once("includes/dbconnect.php");
include_once("includes/post.php");

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5;
//positioning
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
//query
$articles = $PDO->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM posts ORDER BY post_id DESC LIMIT {$start},{$perPage} ");
$articles->execute();
$articles = $articles->fetchAll(PDO::FETCH_ASSOC);
//pages
$total = $PDO->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
$pages = ceil($total / $perPage);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Save The Paws - Blog</title>
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
              Our  <span>Blog</span>
    </h2>

  </div>
</div>
</div>

<!-- // END SUBPAGE HEAD -->

<div class="container">
  <div class="row">
    <div class="col-md-9 has-margin-bottom"> 
    <?php    
if(isset($_GET['keywords'])){
  $keywords=$_GET['keywords'];

  $sql="SELECT * FROM posts WHERE post_name LIKE '%{$keywords}%' OR post_author LIKE '%{$keywords}%'";
  $query1 = $PDO->prepare($sql);
  $query1->execute();
  $query1 = $query1->fetchAll(PDO::FETCH_ASSOC);

  $sql1="SELECT COUNT(*) as total_rows1 FROM posts WHERE post_name LIKE '%{$keywords}%' OR post_author LIKE '%{$keywords}%'";
  $query2 = $PDO->prepare($sql1);
  $query2->execute();
  $row2= $query2->fetch(PDO::FETCH_ASSOC);
  $total_rows1 = $row2['total_rows1'];

    ?>
      <div class="row has-margin-bottom">
         <div class="container">
         <h3 style="color:grey;">Found <?php echo $total_rows1;?> results.</h3>
      </div>
      <br>
      <div class="search">
      <?php foreach ($query1 as $queries) { ?> 
        <br>
      <div class="row has-margin-bottom" >
        <div class="col-md-8 col-sm-4" style="color:black;">
          <h4 class="media-heading"><?php echo $queries['post_name'];?></h4>
          <p>on
             <?php 
             $dt1 = new DateTime($queries['pos_date']);
             echo $dt1->format('d F Y');
          
          ?>  by <a href="#" class="link-reverse" style="color:#800000" ><?php echo $queries['post_author'];?></a></p>
          <p><?php echo substr($queries['post_content'], 0,200);?> ...</p>
          <a class="btn btn-primary" href="blog-single.php?post_id=
          <?php
echo $queries['post_id'];
?>" role="button">Read Article →</a> </div>
      </div>
      <br>
      <br>
      <?php } ?>
      </div>
        </div>
<?php }?>


      <!--Blog list-->
      <?php foreach ($articles as $article) { ?> 
        <br>
        <br>
      <div class="row has-margin-bottom">
        <div class="col-md-4 col-sm-4"> <img class="img-responsive center-block" src="ad/admin/postimages/<?php echo $article['post_img'];?> " alt="bulletin blog"> </div>
        <div class="col-md-8 col-sm-8 bulletin">
          <h4 class="media-heading" style=><?php echo $article['post_name'];?></h4>
          <p>on
             <?php 
             $dt = new DateTime($article['pos_date']);
             echo $dt->format('d F Y');
         
          
          ?>  by <a href="#" class="link-reverse" style="color:#800000"><?php echo $article['post_author'];?></a></p>
          <p><?php echo substr($article['post_content'], 0,200);?> ...</p>
          <a class="btn btn-primary" href="blog-single.php?post_id=
          <?php
echo $article['post_id'];
?>" role="button">Read Article →</a> </div>
      </div>
      <br>
      <br>
      <?php } ?>
      <!-- PAGINATION -->
      
      <div>
      <?php for ($x=1; $x<=$pages; $x++): ?>
						<ul class="pagination">
							<li style="background-color:#800000;padding: 10px 10px 10px 10px;border:2px solid black;">
								<a style="color:white;"href="?page=<?php echo $x; ?>&per-page=<?php echo $perPage; ?>">
									<?php
										echo $x;
									?> <span class="sr-only">(current)</span>
								</a>
							</li>
						</ul>
				 <?php endfor; ?>
      </div>
    </div>
    <!--// col md 9--> 
    
    <!--Blog Sidebar-->
    <div class="col-md-3">
      <div class="blog-search has-margin-xs-bottom">
        <form  action="blog.php" method="get">
        <div class="input-group input-group-lg">
          <input type="text" class="form-control" placeholder="Search.." name="keywords">
          <span class="input-group-btn">
          <button class="btn btn-default" type="submit" name="search" value="search"><i class="fa fa-search" aria-hidden="true"></i></button>
          </span> </div>
          </form>
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

	<script src="js/script.js"></script>
</body>
</html>
