<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lexis Internal Launch</title>
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

#banner .block .btn-learn {
  border: 2px solid {{$secColor->value}};
  color: {{$secColor->value}};
  border-radius: 25px;
  margin: 0 7px;
  padding: 10px 22px;
  font-size: 14px;
  transition: 0.3s;
}
#banner .block .btn-learn:hover {
  background-color: {{$secColor->value}};
  border-color: {{$secColor->value}};
  color: {{$primColor->value}};
}
		#banner {
  background: url('{{$bgL->value}}');
  background-size: cover;
  padding: 250px 0;
  position: relative;
  text-align: center;
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
				background: url('{{$bgC->value}}');
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

			#banner .block h3 {
			color: {{$conColor->value ?? '' }};
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
			<div class="container greyBox">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="block">
							<h1><img src="{{ $logo->value ?? '' }}" class="topLogo" alt=""/></h1>
							<h1><b>{{$headingContent->value}}</b></h1>
							<h2><b>{{$subHeadingContent->value}}</b></h2>
							<h3>{!! $mainContent->value !!}</h3>
							<div class="buttons">
								@if ($regStatus->value == "DISABLE")
								<a href="{{ route('login') }}" class="btn btn-learn">Login</a>								
									
								@else
								<a href="{{ route('registration') }}" class="btn btn-learn">Register</a>								
									
								@endif
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
						  <p>All rights reserved © 2024</p>
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