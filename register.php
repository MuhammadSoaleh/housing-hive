<?php 
if(isset($_POST['sub'])){
	include('conn.php');
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$password=$_POST["pass"];
	$sql="INSERT INTO `register`(`r_fname`,`r_lname`,`r_email`,`r_password`) VALUES ('$fname','$lname','$email','$password');";
	$result = mysqli_query($con,$sql);
	
	
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from apartment-html.chart.civ.pl/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 08:10:37 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Apartment - Premium Real Estate HMTL Site Template</title>
	<meta name="keywords" content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
	<meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">    
	<!-- Font awesome styles -->    
	<link rel="stylesheet" href="apartment-font/css/font-awesome.min.css">  
	<!-- Custom styles -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/apartment-layout.css">
    <link id="skin" rel="stylesheet" type="text/css" href="css/apartment-colors-blue.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="Log.css">
	
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<div class="top-bar-wrapper">
			<div class="container top-bar">
				<div class="row">
					<div class="col-xs-5 col-sm-8">
						<div class="top-mail pull-left hidden-xs">
							<span class="top-icon-circle">
								<i class="fa fa-envelope fa-sm"></i>
							</span>
							<span class="top-bar-text">apartment@domain.tld</span>
						</div>
						<div class="top-phone pull-left hidden-xxs">
							<span class="top-icon-circle">
								<i class="fa fa-phone"></i>
							</span>
							<span class="top-bar-text">(0)-123-456-789</span>
						</div>
						<div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
							<span class="top-icon-circle pull-left">
								<i class="fa fa-map-marker"></i>
							</span>
							<span class="top-bar-text">One Brookings Drive St. Louis, Missouri 63130-4899, USA</span>
						</div>
					</div>
					<div class="col-xs-7 col-sm-4">
						<div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom" title="Login/Register">
							<a class="top-icon-circle" href="reg.php" >
								<i class="fa fa-lock"></i>
							</a>
						</div>
						
						<div class="top-social pull-right">
							<a class="top-icon-circle" href="#">
								<i class="fa fa-facebook"></i>
							</a>
						</div>
						<div class="top-social pull-right">
							<a class="top-icon-circle" href="#">
								<i class="fa fa-twitter"></i>
							</a>
						</div>
						<div class="top-social pull-right">
							<a class="top-icon-circle" href="#">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
						<div class="top-social pull-right">
							<a class="top-icon-circle" href="#">
								<i class="fa fa-skype"></i>
							</a>
						</div>
					</div>
				</div>
			</div><!-- /.top-bar -->	
		</div><!-- /.Page top-bar-wrapper -->	
		<nav class="navbar main-menu-cont">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar icon-bar1"></span>
						<span class="icon-bar icon-bar2"></span>
						<span class="icon-bar icon-bar3"></span>
					</button>
					<a href="index-2.html" title="" class="navbar-brand">
						<img src="images/logo-dark.png" alt="Apartment - Premium Real Estate Template" />
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
							<ul class="dropdown-menu">
								<li><a href="index-2.html">Homepage 1 - slider</a></li>
								<li><a href="index-map.html">Homepage 1 - map</a></li>
								<li><a href="index2.html">Homepage 2 - slider</a></li>
								<li><a href="index2-map.html">Homepage 2 - map</a></li>
								<li><a href="index3.html">One Page Single Propery - slider</a></li>
								<li><a href="index3-street-view.html">One Page Single Propery - panorama!</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listings</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a tabindex="-1" href="listing-grid-right-sidebar.html">Grid Listing</a>
									<ul class="dropdown-menu">
										<li><a href="listing-grid-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="listing-grid-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="listing-grid-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="listing-masonry-right-sidebar.html">Masonry Listing</a>
									<ul class="dropdown-menu">
										<li><a href="listing-masonry-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="listing-masonry-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="listing-masonry-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="listing-list-right-sidebar.html">Classic Listing</a>
									<ul class="dropdown-menu">
										<li><a href="listing-list-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="listing-list-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="listing-list-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="estate-details-right-sidebar.html">Single Property</a>
									<ul class="dropdown-menu">
										<li><a href="estate-details-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="estate-details-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="estate-details-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agencies</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a tabindex="-1" href="agencies-listing-right-sidebar.html">Agencies Listing</a>
									<ul class="dropdown-menu">
										<li><a href="agencies-listing-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="agencies-listing-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="agencies-listing-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="agency-details-right-sidebar.html">Agency Details</a>
									<ul class="dropdown-menu">
										<li><a href="agency-details-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="agency-details-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="agency-details-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="agents-right-sidebar.html">Agents List</a>
									<ul class="dropdown-menu">
										<li><a href="agents-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="agents-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="agents-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="agent-right-sidebar.html">Agent Details</a>
									<ul class="dropdown-menu">
										<li><a href="agent-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="agent-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="agent-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a tabindex="-1" href="typography-no-sidebar.html">Typography &amp; Elements</a>
									<ul class="dropdown-menu">
										<li><a href="typography-no-sidebar.html">No Sidebar</a></li>
										<li><a href="typography-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="typography-left-sidebar.html">Left Sidebar</a></li>
									</ul>
								</li>
								<li><a href="404.html">Error 404</a></li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="rtl-index.html">RTL Pages</a>
									<ul class="dropdown-menu">
									  <li><a href="rtl-index.html">RTL Homepage</a></li>
									  <li><a href="rtl-page.html">RTL Estate details</a></li>
									</ul>
								</li>
								<li role="separator" class="divider"></li>
								<li><a href="#login-modal" data-toggle="modal">Login</a></li>
								<li><a href="#register-modal" data-toggle="modal">Register</a></li>
								<li><a href="#forgot-modal" data-toggle="modal">Forgotten Password</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="my-offers.html">My account - Offers</a></li>
								<li><a href="my-profile.html">My account - Profile</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
							<ul class="dropdown-menu">
								<li><a href="archive-grid.html">Default Grid</a></li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="archive-grid2-right-sidebar.html">Masonry Grid</a>
									<ul class="dropdown-menu">
										<li><a href="archive-grid2-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="archive-grid2-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="archive-grid2-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="archive-right-sidebar.html">Classic List</a>
									<ul class="dropdown-menu">
										<li><a href="archive-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="archive-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="archive-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="blog-right-sidebar.html">Single Post</a>
									<ul class="dropdown-menu">
										<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="blog-no-sidebar.html">No Sidebar</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a>
							<ul class="dropdown-menu">
								<li><a href="contact1.html">Contact version 1</a></li>
								<li><a href="contact2.html">Contact version 2</a></li>
							</ul>
						</li>
						<li><a href="submit-property.html" class="special-color">Submit property</a></li>
					</ul>
				</div>
			</div>
		</nav><!-- /.mani-menu-cont -->	
    </header>
	
  		
    <section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h1 class="second-color">Sign up</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow ">
		<div class="container">
<div id="login-form-wrap" class="conatiner ">
  <h2 style="padding-top: 20px;">Sign up</h2>
  <form id="login-form" style="padding-top: 60px; " method="post">
    <p style="margin-bottom: 20px;">
    <input type="text" style=" border: 1px solid #c2c0ca" id="username" name="fname" placeholder="Frist Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <p style="margin-bottom: 20px;">
    <input type="text" style=" border: 1px solid #c2c0ca" id="username" name="lname" placeholder="Last Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <p style="margin-bottom: 20px;">
    <input type="email" style=" border: 1px solid #c2c0ca" id="username" name="email" placeholder="Email" required><i class="validation"><span></span><span></span></i>
    </p>
    <p style="margin-bottom: 20px;">
    <input type="password" style=" border: 1px solid #c2c0ca" id="email" name="pass"  placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <p style="margin-bottom: 20px;">
    <input type="password" style=" border: 1px solid #c2c0ca" id="email" name="rpass"  placeholder="Confirm Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" name="sub" value="Sign up"
	style="margin-bottom: 50px;">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Already a member? <a href="login.php">log in</a><p>
  </div><!--create-account-wrap-->
</div>
</section>



    <footer class="large-cont">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<h4 class="second-color">contact us<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<p class="footer-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<address>
						<span><i class="fa fa-map-marker"></i>00456 Some Address line</span>
						<div class="footer-separator"></div>
						<span><i class="fa fa-envelope fa-sm"></i><a href="#">email@domain.tld</a></span>
						<div class="footer-separator"></div>
						<span><i class="fa fa-phone"></i>01-23456789</span>
					</address>
					<div class="clear"></div>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<h4 class="second-color">quick links<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<ul class="footer-ul">
						<li><span class="custom-ul-bullet"></span><a href="index-2.html">Home</a></li>
						<li><span class="custom-ul-bullet"></span><a href="listing-grid-right-sidebar.html">Listing</a></li>
						<li><span class="custom-ul-bullet"></span><a href="agencies-listing-right-sidebar.html">Agencies</a></li>
						<li><span class="custom-ul-bullet"></span><a href="archive-grid.html">Blog</a></li>
						<li><span class="custom-ul-bullet"></span><a href="contact1.html">Contact us</a></li>
						<li><span class="custom-ul-bullet"></span><a href="submit-property.html">Submit property</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-3">
					<h4 class="second-color">from the blog<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<div class="row">
						<div class="col-xs-6 col-sm-12">
							<article>
								<a href="blog-right-sidebar.html"><img src="images/footer-blog1.jpg" alt="" class="footer-blog-image" /></a>
								<div class="footer-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
								<div class="footer-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>					
							</article>
							<div class="footer-blog-separator hidden-xs"></div>
						</div>
						<div class="col-xs-6 col-sm-12">
							<article>
								<a href="blog-right-sidebar.html"><img src="images/footer-blog2.jpg" alt="" class="footer-blog-image" /></a>
								<div class="footer-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
								<div class="footer-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>					
							</article>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-3">
					<h4 class="second-color">newsletter<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<p class="footer-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<form class="form-inline footer-newsletter">
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="enter your email">
						<button type="submit" class="btn"><i class="fa fa-lg fa-paper-plane"></i></button>
					</form>
				</div>
			</div>
		</div>
    </footer>
	<footer class="small-cont">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 small-cont">
					<img src="images/logo-light.png" alt="" class="img-responsive footer-logo" />
				</div>
				
			</div>
		</div>
	</footer>
</div>	

<!-- Move to top button -->

<div class="move-top">
	<div class="big-triangle-second-color"></div>
	<div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
</div>	



<!-- jQuery  -->
    <script type="text/javascript" src="js/jQuery/jquery.min.js"></script>
	<script type="text/javascript" src="js/jQuery/jquery-ui.min.js"></script>
	
<!-- Bootstrap-->
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>

<!-- Google Maps -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;sensor=false&amp;libraries=places"></script>
	
<!-- plugins script -->
	<script type="text/javascript" src="js/plugins.js"></script>

<!-- template scripts -->
	<script type="text/javascript" src="mail/validate.js"></script>
    <script type="text/javascript" src="js/apartment.js"></script>

	</body>

<!-- Mirrored from apartment-html.chart.civ.pl/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 08:10:39 GMT -->
</html>