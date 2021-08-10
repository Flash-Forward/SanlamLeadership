<html class="no-js" lang="en-za">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>African Leadership For Health Gathering</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.9/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
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
		.interval-row-alert{
			height: 50;
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
	li{
        cursor: pointer;
    }
	li:hover{
        color: #0096FF !important;
    }

	main{
		background-color: #ffffff;

	}
	.join-link:hover{
        cursor: pointer;

	}
	.room-card{
		background: #ffffff;
	}

	.alertBox{
		box-shadow: 5px 10px;
	}
	.bryte-button {
            background-color: #79232E
 !important;
            border-color: #79232E
 !important;
            color: #ffffff !important;
            height: 1.7vw;
            width: 2.5vw;

            margin-bottom: 2%;
			padding: 0 !important;
			border-radius: 10px;
        }

		</style>
	</head>
	<body>
	<script src="{{ asset('js') }}/schedule/ics.deps.min.js"></script>
	<script src="{{ asset('js') }}/schedule/ics.min.js"></script>		
	<nav class="navbar navbar-expand-sm bg-light" style="color: #000000 !important;">

<!-- Links -->
<a href="#" class="navbar-left" style="margin-right: 3%; margin-left: 3%;"><img src="{{ asset('img') }}/bryte/logo3.png"></a>
<ul class="navbar-nav ml-auto">
  <li class="nav-item active" onMouseOver="this.style.color='#0096FF'">
	<a class="nav-link" href="{{ route('lobby') }}" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Lobby</a>
  </li>
  <li class="nav-item">
	<a class="nav-link" href="{{ route('schedule') }}" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Schedule</a>
  </li>
  <li class="nav-item">
	<a class="nav-link"  onclick="checkRoom('room_two_open_time', '/room/99', event);" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Main Room</a>
  </li>
  <li class="nav-item">
	<a class="nav-link"  onclick="checkRoom('room_four_open_time', '/breakaway', event);" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Breakaway Rooms</a>
  </li>
	  <li class="nav-item">
	  <a class="nav-link"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'"  href="{{ route('logout') }}" style="color: #000000 !important;" onclick="event.preventDefault();
	 document.getElementById('logout-form').submit();">Log Out</a>
	  </li>
</ul>


</nav>
	<main>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
		<div id="banner"><img src="{{ asset('img') }}/al/banner.png" class="stretch" alt="" /></div>
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

const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn bryte-button',
    cancelButton: 'btn bryte-button'
  },
  buttonsStyling: false
})

function checkRoom(room, route){
        $.ajax({
            url: '{{ route("room.check") }}?r='+room,
            type: "get",
            success: function (data) {
                // if (data == "1") {
	              //   window.location.href = route;
                    
                // }else{
                    swalWithBootstrapButtons.fire({
                        //html: '<span style="color:#ffffff; font-size: 1.2vw;">This room opens at '+data+'</span>',
                        html: '<span style="color:#ffffff; font-size: 1.2vw;">This room is closed</span>',

                        background: "url('{{ asset('img') }}/bryte/background.jpg')",
                        // html: true,

						padding: "8px",
            margin: "2px",
						width: "20%",
                        //footer: '<a href>Why do I have this issue?</a>'
                    })
               // }
            }
        });
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