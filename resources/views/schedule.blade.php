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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>
		.interval-row{
			height: 70;
		}
		.h2, h2 {
			font-size: 1.5rem;
		}
		.room-fold
		{
			position: absolute;
			top: 0;
			left: 0;
			width: 10%;
			height: 95%;
			background-image: url('{{ asset("img") }}/schedule/room-fold-02.png');
			background-position: 0 60%;
			background-repeat: no-repeat;
			background-size: cover;
			/* border: thin red solid; */
			z-index: 999 !important;
			/* transform: rotate(-90deg);*/
		}

		.btn-circle {
				width: 70px;
				height: 70px;
				padding: 10px 16px;
        margin: 7px;
				border-radius: 35px;
				font-size: 24px;
				line-height: 1.33;
			}

		</style>
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

	<script>
function redirectToLobby(){
	window.location.href = "{{ route('lobby') }}";
}
function redirectRoom(link){
	window.location.href = link;

}
</script>
<div style="position: fixed; bottom: 0; left:0; width:70px;">
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
</div>

	<div id="back-top"> <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a></div>
	<script src="{{ asset('js') }}/schedule/jquery-3.3.1.min.js"></script> 
	<script src="{{ asset('js') }}/schedule/bootstrap.min.js"></script> 
	<script src="{{ asset('js') }}/schedule/wow.min.js"></script> 
	<script src="{{ asset('js') }}/schedule/main.js"></script>
	<script src="{{ asset('js') }}/schedule/main.js"></script>
	</body>
</html>