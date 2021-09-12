<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sanlam Connect</title>
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
.btn-learn {
  border: 2px solid #323d48 !important;
  background-color: #323d48 !important;

  color: #ffffff !important;;
  border-radius: 25px;
  margin: 0 7px;
  padding: 10px 22px;
  font-size: 14px;
  transition: 0.3s;
}
.btn-learn:hover {
  background-color: #323d48 !important;;
  border-color: #323d48 !important;;
  color: #0074c9 !important;;
}
		#banner {
  background:  url('{{ asset("img") }}/sanlam/landing.png');
  /* background-color: #313f4a; */
  background-size: cover;
  padding: 250px 0;
  position: relative;
  text-align: center;
  height: 100vh;
  width: 100vw;
}
			.topLogo{
				width: 50%;
				position: relative; 
				margin-bottom: 2%;
			}
			.greyBox{
				width: 65% !important;
				height: 60% !important;
				padding: 2%;
				background-color: rgba(28,38,47,1);
				border-radius: 10px;

			}
			#banner .block h1 {
				padding-bottom: 5px;
				font-size: 40px;
				font-weight: 100;
				color: {{$headingColor->value ?? '' }};
			}
			#banner .block h2 {
			padding-bottom: 25px;
			font-size: 30px;
			font-weight: 100;
			color: {{$subHeadingColor->value ?? '' }};
			}

			#loginButton{
				position: relative;
				text-align: center;
				font-size: 62px;
				width: 30vw;
				height: 6vw;
				left: 19%;
				top: 53%;
				z-index: 1500;
			}

			@media only screen 
            and (max-width : 500px) {
				.greyBox{
				width: 80% !important;
				height: 60% !important;
				padding: 2%;
				background-color: rgba(255,255,255,0.50);
				border-radius: 10px;

			}
			.topLogo{
				width: 70%;
				position: relative; 
				margin-bottom: 2%;
			}

			}
		</style>
	</head>
	<body id="top">
	
	<div class="wrapper">
		<section id="banner">

				<a href="{{ route('login') }}" id="loginButton" class="btn btn-learn">Login</a>								
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