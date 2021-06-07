<html class="no-js" lang="en-za">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>BryteSA</title>
		<meta name="description" content="Flash Forward ">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ asset('css') }}/schedule/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css') }}/schedule/all.min.css">
		<link rel="stylesheet" href="{{ asset('css') }}/schedule/events.css">
		<link rel="stylesheet" href="{{ asset('css') }}/schedule/custom.css">
	</head>
	<body>
	<script src="{{ asset('js') }}/schedule/ics.deps.min.js"></script>
	<script src="{{ asset('js') }}/schedule/ics.min.js"></script>		
	<main>
		<div id="banner"><img src="{{ asset('img') }}/bryte/banner.jpg" class="stretch" alt="" /></div>
		<section class="accordion fix">
			<div class="container">
				<div class="row ">
					<div class="col-sm-12">
						<div class="properties__button mb-40">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
                                {!! $days !!}

								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				@if($showHelp)
				<div class="row">
					<div class="col-sm-12">
						<p>Click on <i class="fa fa-info-circle"></i> to view session information.</p>
					</div>					
				</div>
				@endif
				<div class="tab-content" id="nav-tabContent">
					{!! $schedule !!}
				</div>
			</div>
		</section>
	</main>
	<div id="back-top"> <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a></div>
	<script src="{{ asset('js') }}/schedule/jquery-3.3.1.min.js"></script> 
	<script src="{{ asset('js') }}/schedule/bootstrap.min.js"></script> 
	<script src="{{ asset('js') }}/schedule/wow.min.js"></script> 
	<script src="{{ asset('js') }}/schedule/main.js"></script>
	<script src="{{ asset('js') }}/schedule/main.js"></script>
	</body>
</html>