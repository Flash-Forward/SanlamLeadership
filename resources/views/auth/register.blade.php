<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>BryteSA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/owl.carousel.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/owl.transitions.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/animate.min.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/lightbox.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/preloader.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/image.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/icon.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/style.css">
		<link rel="stylesheet" href="{{ asset('landing') }}/css/responsive.css">
		<style>
			.greyBox{
				width: 55% !important;
				height: 60% !important;
				padding: 2%;
				background-color: rgba(255,255,255,0.50);
				border-radius: 10px;

			}
		</style>
	</head>
	<body id="top">
	
	<div class="wrapper">
		<section id="banner">
			<div class="container greyBox">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="block">
							<h1><img src="{{ asset('img') }}/bryte/logo.png" width="32%" alt="" style="position: relative; top: 10px;"/></h1>
							<h1><b>Welcome to the Business Partner Conference</b></h1>
							<h2><b>Tuesday, 22 June 2021 10:00 – 16:00</b></h2>
							<h3 style="color: #000000;">Thank you for joining us for our first ever Business Partner Conference! The conference will focus on a range of risk realities and we are delighted to present to you several renowned thought leaders who will share robust insights and interesting perspectives.</h3>
							<div class="buttons">
								<a href="{{ route('register.sa') }}" class="btn btn-learn">Register: South Africa</a>
                                <a href="{{ route('register.ba') }}" class="btn btn-learn">Register: Botswana</a>
								
						  </div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
						  <p>All rights reserved © 2021</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

		<!-- load Js -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/lightbox.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/html5lightbox.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.scrollUp.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nav.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>