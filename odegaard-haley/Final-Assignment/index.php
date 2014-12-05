<!DOCTYPE html> 
<html>
<head>
	<title>UIBRUSH</title>
	<link rel="stylesheet" href="style.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<section id="nav">
		<?php include_once("header.php"); ?> 
	</section>

	<section id="top">
		<div id="stage1">
			<div id="welcome">
				<h3 align="center">Welcome to UIBrush</h3>
				<p class="tagline">We provide Ultimate PSD Templates</p>
			</div> <!-- ===== welcome ===== -->
			<div id="blurb">
				<p>Loren ipsum dolor sit amet <a href="#">consectuer adipicing elit</a></p>
			</div>
		</div>
</section>

	<section id="info">
		<h2>UIBrush</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
voluptate velit esse cillum.</p>
	<ul>
		<li>
			<i class="fa fa-list-ul"></i>
			<h4>Innovative Design</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
		</li>
		<li>
			<i class="fa fa-code"></i>
			<h4>Clean Coding</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
		</li>
		<li>
			<i class="fa fa-location-arrow"></i>
			<h4>Quick Delivery</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
		</li>
		<li>
			<i class="fa fa-phone"></i>
			<h4>Best Support</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
		</li>
	</ul>
	</section>
	<section id="recent">
		<h2 class="longer">Recent Projects</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
		
		<ul>
			<li><a href="#">
				<img src="images/image2.jpg">
				<h5>Portfolio One</h5>
				<p class="portfolio">Lorem ipsum dolor sit amet.</p></a>
			</li>
			<li><a href="#">
				<img src="images/image3.jpg">
				<h5>Portfolio Two</h5>
				<p class="portfolio">Lorem ipsum dolor sit amet.</p></a>
			</li>
			<li><a href="#">
				<img src="images/image4.jpg">
				<h5>Portfolio Three</h5>
				<p class="portfolio">Lorem ipsum dolor sit amet.</p></a>
			</li>
			<li><a href="#">
				<img src="images/image6.jpg">
				<h5>Portfolio Four</h5>
				<p class="portfolio">Lorem ipsum dolor sit amet.</p></a>
			</li>
		</ul>
	</section>
	<section id="foot">
		<?php include_once("footer.php"); ?> 
	</section>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$(".fa-bars").on("click", function(){
					$(".dropdown").toggleClass("open");
				});
			});
</script>

</body>
