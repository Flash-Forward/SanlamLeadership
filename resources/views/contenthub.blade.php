<html class="no-js" lang="en-za">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Edulink Virtual Roadshow</title>
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
			margin: 10;
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
            background-color: #0074c9
 !important;
            border-color: #0074c9
 !important;
            color: #ffffff !important;
            height: 1.7vw;
            width: 2.5vw;

            margin-bottom: 2%;
			padding: 0 !important;
			border-radius: 10px;
        }
        .stretch-link {
            width:100%;
            height:100%;
            display: block;
            position: absolute;
        }
        div{
            margin-bottom: 30px;
        }

        div a {
    /* border:1px solid #fff; */
    display:block;
    position:absolute;
    background-color:rgba(0,0,0,0.1);
    border-radius: 10px;
}
div a:hover {
  cursor: pointer;
    background-color:rgba(255,255,255,0.3);
    border-radius: 10px;

}

#overlay {
  text-align:center;
  vertical-align: middle;
  
  justify-content: center;
  align-items: center;
  position: fixed; /* Sit on top of the page content */
  display: none;
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.6); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
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
      <a class="nav-link" href="/sponsors" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Sponsors</a>
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
<div id="overlay" class="">
<iframe id="conIframe" style="width: 80%; height: 80%; top: 10%; left: 10%; position: absolute;" src="https://www.youtube.com/embed/WptKvof-cC0" title="YouTube video player" class="yt_player_iframe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div style="position: fixed; top: 11%; right:11.5%; width:70px;">
	<button id="homeButton" type="button" class="btn btn-danger btn-circle" onclick="off();"><i class="fa fa-times"></i>
  </div>
</div> 
		<div id="banner"><img src="{{ asset('img') }}/sanlam/cb.png" class="stretch" alt="" /></div>

	</main>
    <div class="row">
        <div class="col-md-4">
            <a class="stretch-link" onclick="on('https://www.youtube.com/embed/WptKvof-cC0');"></a>
            <img src="{{ asset('img') }}/chub/edu.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/3Z4Bzu8O92k');"></a>
            <img src="{{ asset('img') }}/chub/trin.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/oYq55hDYIig');"></a>
            <img src="{{ asset('img') }}/chub/durh.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a class="stretch-link" onclick="on('https://www.youtube.com/embed/BbAEb6mC4lc');"></a>
            <img src="{{ asset('img') }}/chub/buck.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/SA91V4yFTL4');"></a>
            <img src="{{ asset('img') }}/chub/bourn.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/_yprPQZRh0A');"></a>
            <img src="{{ asset('img') }}/chub/cove.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a class="stretch-link" onclick="on('https://www.youtube.com/embed/lEAX4U65bQ8');"></a>
            <img src="{{ asset('img') }}/chub/newc.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/lkVz9lphy8M');"></a>
            <img src="{{ asset('img') }}/chub/uk.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/icjdVT26IY0');"></a>
            <img src="{{ asset('img') }}/chub/study.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a class="stretch-link" onclick="on('https://www.youtube.com/embed/HYWPtB7A4iw');"></a>
            <img src="{{ asset('img') }}/chub/bhms.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/Y9Ks7P92zsE');"></a>
            <img src="{{ asset('img') }}/chub/debr.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/yn8JQATqiTw');"></a>
            <img src="{{ asset('img') }}/chub/icla.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a class="stretch-link" onclick="on('https://www.youtube.com/embed/eEx5OE7xGvc');"></a>
            <img src="{{ asset('img') }}/chub/east.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/ZE3wlDkvsTs');"></a>
            <img src="{{ asset('img') }}/chub/georg.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/D885s5H8PEg');"></a>
            <img src="{{ asset('img') }}/chub/alte.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a class="stretch-link" onclick="on('https://www.youtube.com/embed/RWcRYjm-iEQ');"></a>
            <img src="{{ asset('img') }}/chub/vet.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>
        <div class="col-md-4">
        <a class="stretch-link" onclick="on('https://www.youtube.com/embed/rNx80jyDF8I');"></a>
            <img src="{{ asset('img') }}/chub/linc.jpg" class="stretch" style="width: 100%; border-radius: 35px" alt="" />
        </div>

    </div>
	<script>
    function on(url) {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("conIframe").src = url;

}

function off() {
    //if I want i can set scope to a specific region
var myScope = document.getElementById('overlay');
//otherwise set scope as the entire document
//var myScope = document;

//if there is an iframe inside maybe embedded multimedia video/audio, we should reload so it stops playing
var iframes = myScope.getElementsByTagName("iframe");
if (iframes != null) {
    for (var i = 0; i < iframes.length; i++) {
        iframes[i].src = iframes[i].src; //causes a reload so it stops playing, music, video, etc.
    }
}
  document.getElementById("overlay").style.display = "none";



} 
	const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn bryte-button',
    cancelButton: 'btn bryte-button'
  },
  buttonsStyling: false
})
var first_time = 1;
var redirectPrep = 0;
(function worker() {
  $.ajax({
    url: '{{ route("instructions") }}', 
    success: function(data) {
		console.log(data);
      if(data["message"] != "NONE"){
			  if(first_time == 1){
          swalWithBootstrapButtons.fire({
                        html: '<span style="color:#ffffff; font-size: 1.2vw;">'+data["message"]+'</span>',
                        //html: '<span style="color:#ffffff; font-size: 1.2vw;">This room is closed</span>',

                        background: "url('{{ asset('img') }}/bryte/background.jpg')",
                        // html: true,

                    padding: "8px",
                    margin: "2px",
                    width: "20%",
                                //footer: '<a href>Why do I have this issue?</a>'
                            })
				  first_time = 0;
			  }
      }else{
				  first_time = 1;

      }

      if(data["redirect"] == "PREP"){
        redirectPrep = 1;
      }
      if(data["redirect"] != "PREP" && data["redirect"] != "NONE"){
			  if(redirectPrep == 1){
          // Simulate a mouse click:
          window.location.href = data["redirect"];
			  }
      }
		},
    complete: function() {
      // Schedule the next request when the current one's complete
      setTimeout(worker, 2000);
    }
  });
})();
function redirectToLobby(){
	window.location.href = "{{ route('lobby') }}";
}
function redirectRoom(link){
	window.location.href = link;

}



function checkRoom(room, route){
        $.ajax({
            url: '{{ route("room.check") }}?r='+room,
            type: "get",
            success: function (data) {
				@if(Auth::user()->user_roles_id == 1)
                if (true) 
              @else
                if (data == "1") 

              @endif
              {
	                window.location.href = route;
                    
                }else{
                    swalWithBootstrapButtons.fire({
                        html: '<span style="color:#ffffff; font-size: 1.2vw;">This room opens at '+data+'</span>',
                        //html: '<span style="color:#ffffff; font-size: 1.2vw;">This room is closed</span>',

                        background: "url('{{ asset('img') }}/bryte/background.jpg')",
                        // html: true,

						padding: "8px",
            margin: "2px",
						width: "20%",
                        //footer: '<a href>Why do I have this issue?</a>'
                    })
                }
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