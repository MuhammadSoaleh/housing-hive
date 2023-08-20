<?php
session_start();
if(!isset($_SESSION['lmail'])){
    header("Location:login.php");
}
if(isset($_POST['sub'])){
    include('conn.php');
    $property_type=$_POST["transaction1"];
    $transaction=$_POST["transaction2"];
    $price=$_POST["price"];
    $area=$_POST["area"];
    $bedrooms=$_POST["bedrooms"];
    $bathrooms=$_POST["bathrooms"];
    $description=$_POST["message"];
    $value=$_POST['cc'];
    $value1=implode(",",$value);
    $location="uploads/";
    $data = '';
    foreach ($_FILES['images']['name'] as $key=>$val){
        $file=$_FILES['images']['name'][$key];
        $file_tmp=$_FILES['images']['tmp_name'][$key];
        move_uploaded_file($file_tmp,$location.$file);
        $data .=$file.",";

    }

    $sql="INSERT INTO submit-property(sp_property-type, sp_transaction, sp_price, sp_area, sp_bedroom, sp_bathrooms, sp_description,sp_features,sp_gallery) VALUES ('$property_type','$transaction','$price','$area','$bedrooms','$bathrooms','$description','$value1','$data')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo '<script> alert ("Property Submitted Successfully"); </script>';
    }
    else{
        echo '<script> alert ("Property Not Submitted Successfully , Try Again"); </script>';
    }

}?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from apartment-html.chart.civ.pl/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 08:12:41 GMT -->
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
							<a class="top-icon-circle" href="#login-modal" data-toggle="modal">
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
						<li><a href="login.php" class="special-color">Submit property</a></li>
					</ul>
				</div>
			</div>
		</nav><!-- /.mani-menu-cont -->	
    </header>
	
  	
    <section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="subtitle-margin second-color">add listing</h5>
					<h1 class="second-color">my account</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow">
		<form name="offer-from"  enctype="multipart/form-data" method="post">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<h3 class="title-negative-margin">Listing details<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<div class="row">
								
								<div class="col-xs-12 col-sm-6">
									<select name="transaction1" class="bootstrap-select" title="Property type:">
										<option value="Apartment">Apartment</option>
										<option value="House">House</option>
										<option value="Commercial">Commercial</option>
										<option value="Land">Land</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-xs-15">
									<select name="transaction2" class="bootstrap-select" title="Transaction:">
										<option value="For Sale">For sale</option>
										<option value="For Rent">For rent</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="price" type="text" class="input-full main-input" placeholder="Price" />
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15 margin-top-xs-0">
									<input name="area" type="text" class="input-full main-input" placeholder="Area" />
								</div>
								<div class="col-xs-12 col-sm-6">
									<input name="bedrooms" type="text" class="input-full main-input" placeholder="Bedrooms" />
								</div>
								<div class="col-xs-12 col-sm-6">
									<input name="bathrooms" type="text" class="input-full main-input" placeholder="Bathrooms" />
								</div>
							</div>
							<textarea name="message" class="input-full main-input property-textarea" placeholder="Description"></textarea>
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="c1" name="cc[]" class="main-checkbox" value="Air Conditioning" />
									<label for="c1"><span></span>Air Conditioning</label><br/>
									<input type="checkbox" id="c2" name="cc[]" class="main-checkbox" value="Internet"/>
									<label for="c2"><span></span>Internet</label><br/>
									<input type="checkbox" id="c3" name="cc[]" class="main-checkbox" value="Cable TV" />
									<label for="c3"><span></span>Cable TV</label><br/>
									<input type="checkbox" id="c4" name="cc[]" class="main-checkbox" value="Balcony"/>
									<label for="c4"><span></span>Balcony</label><br/>
									<input type="checkbox" id="c5" name="cc[]" class="main-checkbox"value="Roof Terrace" />
									<label for="c5"><span></span>Roof Terrace</label><br/>
									<input type="checkbox" id="c6" name="cc[]" class="main-checkbox"value="Terrace" />
									<label for="c6"><span></span>Terrace</label>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="c7" name="cc[]" class="main-checkbox" value="Lift"/>
									<label for="c7"><span></span>Lift</label><br/>
									<input type="checkbox" id="c8" name="cc[]" class="main-checkbox"value="Garage" />
									<label for="c8"><span></span>Garage</label><br/>
									<input type="checkbox" id="c9" name="cc[]" class="main-checkbox" value="Security"/>
									<label for="c9"><span></span>Security</label><br/>
									<input type="checkbox" id="c10" name="cc[]" class="main-checkbox"value="High Standard" />
									<label for="c10"><span></span>High Standard</label><br/>
									<input type="checkbox" id="c11" name="cc[]" class="main-checkbox"value="City Centre" />
									<label for="c11"><span></span>City Centre</label><br/>
									<input type="checkbox" id="c12" name="cc[]" class="main-checkbox" value="Furniture"/>
									<label for="c12"><span></span>Furniture</label>
								</div>
								<!-- <div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="c13" name="cc[]" class="main-checkbox"value="Internet" />
									<label for="c13"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c14" name="cc[]" class="main-checkbox"value="Internet" />
									<label for="c14"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c15" name="cc[]" class="main-checkbox"value="Internet" />
									<label for="c15"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c16" name="cc[]" class="main-checkbox" value="Internet"/>
									<label for="c16"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c17" name="cc[]" class="main-checkbox" value="Internet"/>
									<label for="c17"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c18" name="cc[]" class="main-checkbox" value="Internet"/>
									<label for="c18"><span></span>Another Option</label>
								</div> -->
							</div>
						</div>	
		
					</div>
					<div class="col-xs-12 col-md-6 margin-top-xs-60 margin-top-sm-60">
						<h3 class="title-negative-margin">Localization<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<input id="geocomplete" name="geocomplete" type="text" class="input-full main-input" placeholder="Localization" />
							<p class="negative-margin bold-indent">Or drag the marker to property position<p>
							<div id="submit-property-map" class="submit-property-map"></div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="lng" type="text" class="input-full main-input input-last" placeholder="Longitude" readonly="readonly" />
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="lat" type="text" class="input-full main-input input-last" placeholder="Latitude" readonly="readonly" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 margin-top-60">
						<h3 class="title-negative-margin">gallery<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
					</div>
					<div class="col-xs-12 margin-top-60">
						<input id="file-upload" name="images[]" type="file" multiple>
					</div>
					<div class="col-xs-12">
						<div class="center-button-cont margin-top-60">
							<button style="border:none;" class="button-primary button-shadow" name="sub"  onclick="window.location.reload()">
								<span>submit property</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-lg fa-home"></i></div>
</button>
						</div>
					</div>
				</div>
			</div>
		</form>
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
				<div class="col-xs-12 col-md-6 footer-copyrights">
					&copy; Copyright 2015 <a href="http://themeforest.net/user/johnnychaos?ref=johnnychaos" target="blank">Jan Skwara</a>. All rights reserved. Buy on <a href="http://themeforest.net/user/johnnychaos/portfolio?ref=johnnychaos" target="blank">Themeforest</a>.
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

<!-- Login modal -->
	<div class="modal fade apartment-modal" id="login-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Login<span class="special-color">.</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<input name="login" type="email" class="input-full main-input" placeholder="Email" />
					<input name="password" type="password" class="input-full main-input" placeholder="Your Password" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Sing In</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
					<a href="#" class="forgot-link pull-right">Forgot your password?</a>
					<div class="clearfix"></div>
					<p class="login-or">OR</p>
					<a href="#" class="facebook-button">
						<i class="fa fa-facebook"></i>
						<span>Login with Facebook</span>
					</a>
					<a href="#" class="google-button margin-top-15">
						<i class="fa fa-google-plus"></i>
						<span>Login with Google</span>
					</a>
					<p class="modal-bottom">Don't have an account? <a href="#" class="register-link">REGISTER</a></p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- Register modal -->
	<div class="modal fade apartment-modal" id="register-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Register<span class="special-color">.</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<input name="first-name" type="text" class="input-full main-input" placeholder="Frist name" />
					<input name="last-name" type="text" class="input-full main-input" placeholder="Last name" />
					<input name="email" type="email" class="input-full main-input" placeholder="Email" />
					<input name="password" type="password" class="input-full main-input" placeholder="Password" />
					<input name="repeat-password" type="password" class="input-full main-input" placeholder="Repeat Password" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Sing up</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
					<div class="clearfix"></div>
					<p class="login-or">OR</p>
					<a href="#" class="facebook-button">
						<i class="fa fa-facebook"></i>
						<span>Sing Up with Facebook</span>
					</a>
					<a href="#" class="google-button margin-top-15">
						<i class="fa fa-google-plus"></i>
						<span>Sing Up with Google</span>
					</a>
					<p class="modal-bottom">Already registered? <a href="#" class="login-link">SING IN</a></p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- Forgotten password modal -->
	<div class="modal fade apartment-modal" id="forgot-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Forgot your password<span class="special-color">?</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<p class="negative-margin forgot-info">Instert your account email address.<br/>We will send you a link to reset your password.</p>
					<input name="login" type="email" class="input-full main-input" placeholder="Your email" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Reset password</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

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

<!-- Mirrored from apartment-html.chart.civ.pl/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 08:12:41 GMT -->
</html>